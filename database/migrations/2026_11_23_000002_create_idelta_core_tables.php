<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private array $tables = ['settings', 'audit_logs', 'plan_waitlist', 'contact_messages', 'saved_tutors', 'reviews', 'status_logs',
        'bookings', 'enquiries', 'tutor_rates', 'tutor_availability', 'tutor_localities', 'tutor_subjects', 'tutor_documents',
        'tutor_profiles', 'student_profiles', 'localities', 'subject_class', 'subjects', 'boards', 'streams', 'class_levels'];

    public function up(): void
    {
        Schema::create('class_levels', function (Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('slug')->unique(); $t->string('group')->default('school');
            $t->boolean('has_streams')->default(false); $t->unsignedSmallInteger('sort')->default(0);
        });
        Schema::create('streams', function (Blueprint $t) { $t->id(); $t->string('name')->unique(); });
        Schema::create('boards', function (Blueprint $t) { $t->id(); $t->string('name')->unique(); });
        Schema::create('subjects', function (Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('slug')->unique(); $t->string('group')->default('school');
            $t->unsignedSmallInteger('sort')->default(0);
        });
        Schema::create('subject_class', function (Blueprint $t) {
            $t->id();
            $t->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $t->foreignId('class_level_id')->constrained()->cascadeOnDelete();
            $t->foreignId('stream_id')->nullable()->constrained()->nullOnDelete();
        });
        Schema::create('localities', function (Blueprint $t) {
            $t->id(); $t->string('city')->default('Navi Mumbai'); $t->string('name'); $t->string('slug')->unique();
            $t->string('pincode', 10)->nullable(); $t->decimal('lat', 9, 6)->nullable(); $t->decimal('lng', 9, 6)->nullable();
            $t->boolean('active')->default(true);
        });
        Schema::create('student_profiles', function (Blueprint $t) {
            $t->id(); $t->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $t->foreignId('class_level_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('board_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('locality_id')->nullable()->constrained()->nullOnDelete();
            $t->string('parent_name')->nullable(); $t->string('parent_phone', 20)->nullable();
            $t->timestamp('consent_at')->nullable(); $t->timestamps();
        });
        Schema::create('tutor_profiles', function (Blueprint $t) {
            $t->id(); $t->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $t->string('slug')->unique(); $t->string('headline')->nullable(); $t->text('about')->nullable();
            $t->unsignedTinyInteger('experience_years')->default(0); $t->string('qualification')->nullable();
            $t->string('intro_video_url')->nullable(); $t->unsignedInteger('fee_home_monthly')->nullable();
            $t->json('modes')->nullable(); $t->string('verification_status', 30)->default('draft');
            $t->text('rejection_reason')->nullable(); $t->boolean('available_today')->default(false);
            $t->timestamp('available_until')->nullable(); $t->unsignedTinyInteger('response_hours')->nullable();
            $t->decimal('rating_avg', 2, 1)->default(0); $t->unsignedInteger('rating_count')->default(0);
            $t->timestamps(); $t->index(['verification_status', 'available_today']);
        });
        Schema::create('tutor_documents', function (Blueprint $t) {
            $t->id(); $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->string('type', 30); $t->string('file_path'); $t->string('status', 20)->default('pending'); $t->timestamps();
        });
        Schema::create('tutor_subjects', function (Blueprint $t) {
            $t->id(); $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $t->foreignId('class_level_id')->constrained()->cascadeOnDelete();
            $t->foreignId('board_id')->nullable()->constrained()->nullOnDelete();
            $t->index(['subject_id', 'class_level_id']);
        });
        Schema::create('tutor_localities', function (Blueprint $t) {
            $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->foreignId('locality_id')->constrained()->cascadeOnDelete();
            $t->primary(['tutor_profile_id', 'locality_id']);
        });
        Schema::create('tutor_availability', function (Blueprint $t) {
            $t->id(); $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->unsignedTinyInteger('weekday'); $t->time('start_time'); $t->time('end_time'); $t->string('mode', 20)->default('any');
        });
        Schema::create('tutor_rates', function (Blueprint $t) {
            $t->id(); $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->unsignedSmallInteger('duration_minutes'); $t->unsignedInteger('fee_inr');
            $t->unique(['tutor_profile_id', 'duration_minutes']);
        });
        Schema::create('enquiries', function (Blueprint $t) {
            $t->id(); $t->string('type', 20);
            $t->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $t->foreignId('tutor_profile_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('subject_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('class_level_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('locality_id')->nullable()->constrained()->nullOnDelete();
            $t->string('preferred_mode', 20)->nullable(); $t->text('message')->nullable(); $t->string('image_path')->nullable();
            $t->string('status', 30)->default('new');
            $t->foreignId('assigned_admin_id')->nullable()->constrained('users')->nullOnDelete();
            $t->timestamp('expires_at')->nullable(); $t->timestamps(); $t->index('status'); $t->index('expires_at');
        });
        Schema::create('bookings', function (Blueprint $t) {
            $t->id(); $t->foreignId('enquiry_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $t->string('mode', 20); $t->unsignedSmallInteger('duration_minutes')->nullable();
            $t->unsignedInteger('quoted_fee')->nullable(); $t->timestamp('starts_at')->nullable();
            $t->string('meeting_link')->nullable(); $t->string('status', 20)->default('scheduled'); $t->timestamps();
        });
        Schema::create('status_logs', function (Blueprint $t) {
            $t->id(); $t->morphs('loggable'); $t->string('from_status', 30)->nullable(); $t->string('to_status', 30);
            $t->foreignId('actor_id')->nullable()->constrained('users')->nullOnDelete();
            $t->string('note')->nullable(); $t->timestamp('created_at')->useCurrent();
        });
        Schema::create('reviews', function (Blueprint $t) {
            $t->id(); $t->foreignId('booking_id')->unique()->constrained()->cascadeOnDelete();
            $t->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            foreach (['overall', 'qualification', 'expertise', 'communication', 'value'] as $c) { $t->unsignedTinyInteger("rating_$c"); }
            $t->text('comment')->nullable(); $t->string('status', 20)->default('pending'); $t->timestamps();
        });
        Schema::create('saved_tutors', function (Blueprint $t) {
            $t->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $t->foreignId('tutor_profile_id')->constrained()->cascadeOnDelete();
            $t->timestamp('created_at')->useCurrent(); $t->primary(['student_id', 'tutor_profile_id']);
        });
        Schema::create('contact_messages', function (Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('email'); $t->string('phone', 20)->nullable();
            $t->text('message'); $t->string('status', 20)->default('new'); $t->timestamps();
        });
        Schema::create('plan_waitlist', function (Blueprint $t) {
            $t->id(); $t->string('email'); $t->string('plan', 20); $t->string('audience', 20); $t->timestamps();
        });
        Schema::create('audit_logs', function (Blueprint $t) {
            $t->id(); $t->foreignId('actor_id')->nullable()->constrained('users')->nullOnDelete();
            $t->string('action'); $t->string('target_type')->nullable(); $t->unsignedBigInteger('target_id')->nullable();
            $t->json('meta')->nullable(); $t->string('ip', 45)->nullable(); $t->timestamp('created_at')->useCurrent();
        });
        Schema::create('settings', function (Blueprint $t) { $t->string('key')->primary(); $t->text('value')->nullable(); });
    }

    public function down(): void
    {
        foreach ($this->tables as $name) { Schema::dropIfExists($name); }
    }
};
