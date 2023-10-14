<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Tambahkan data ke tabel users
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'role' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'teacher1',
                'password' => bcrypt('teacher123'),
                'role' => 'Teacher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'teacher2',
                'password' => bcrypt('teacher456'),
                'role' => 'Teacher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'student1',
                'password' => bcrypt('student123'),
                'role' => 'Student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'student456',
                'password' => bcrypt('student456'),
                'role' => 'Student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel admins
        DB::table('admins')->insert([
            [
                'user_id' => 1, // Sesuaikan dengan ID user yang sesuai
                'name' => 'Admin Name',
                'email' => 'admin@example.com',
                'phone_number' => '123-456-7890',
                'photo' => 'admin.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel teachers
        DB::table('teachers')->insert([
            [
                'user_id' => 2, // Sesuaikan dengan ID user yang sesuai
                'name' => 'John Smith',
                'phone_number' => '123-456-7890',
                'date_of_birth' => '1980-05-15',
                'gender' => 'Male',
                'address' => '123 Main St',
                'photo' => 'john.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Sesuaikan dengan ID user yang sesuai
                'name' => 'Jane Doe',
                'phone_number' => '987-654-3210',
                'date_of_birth' => '1985-08-20',
                'gender' => 'Female',
                'address' => '456 Elm St',
                'photo' => 'jane.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel students
        DB::table('students')->insert([
            [
                'user_id' => 3, // Sesuaikan dengan ID user yang sesuai
                'name' => 'Sarah Johnson',
                'address' => '1234 Oak Lane',
                'gender' => 'Female',
                'date_of_birth' => '2005-02-10',
                'phone_number' => '555-789-1234',
                'photo' => 'sarah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // Sesuaikan dengan ID user yang sesuai
                'name' => 'William Smith',
                'address' => '5678 Elm St',
                'gender' => 'Male',
                'date_of_birth' => '2006-07-15',
                'phone_number' => '555-456-7890',
                'photo' => 'william.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel classes
        DB::table('classes')->insert([
            [
                'class_name' => 'A',
                'grade' => 'Grade 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'B',
                'grade' => 'Grade 9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel subjects
        DB::table('subjects')->insert([
            [
                'name' => 'Mathematics',
                'grade' => 'Grade 10',
                'teacher_id' => 1, // Sesuaikan dengan ID guru yang sesuai
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science',
                'grade' => 'Grade 9',
                'teacher_id' => 2, // Sesuaikan dengan ID guru yang sesuai
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel shifts
        DB::table('shifts')->insert([
            [
                'time' => '08:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '09:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '11:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '13:30:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'time' => '15:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel schedules
        DB::table('schedules')->insert([
            [
                'class_id' => 1, // Sesuaikan dengan ID kelas yang sesuai
                'subject_id' => 1, // Sesuaikan dengan ID mata pelajaran yang sesuai
                'teacher_id' => 1, // Sesuaikan dengan ID guru yang sesuai
                'shift_id' => 1, // Sesuaikan dengan ID shift yang sesuai
                'day' => 'Monday',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_id' => 2, // Sesuaikan dengan ID kelas yang sesuai
                'subject_id' => 2, // Sesuaikan dengan ID mata pelajaran yang sesuai
                'teacher_id' => 2, // Sesuaikan dengan ID guru yang sesuai
                'shift_id' => 2, // Sesuaikan dengan ID shift yang sesuai
                'day' => 'Tuesday',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel scores
        DB::table('scores')->insert([
            [
                'schedule_id' => 1, // Sesuaikan dengan ID jadwal yang sesuai
                'student_id' => 1, // Sesuaikan dengan ID siswa yang sesuai
                'assignment_score' => 90.5,
                'mid_exam_score' => 85.0,
                'final_exam_score' => 92.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'schedule_id' => 2, // Sesuaikan dengan ID jadwal yang sesuai
                'student_id' => 2, // Sesuaikan dengan ID siswa yang sesuai
                'assignment_score' => 75.5,
                'mid_exam_score' => 82.5,
                'final_exam_score' => 78.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);

        // Tambahkan data ke tabel notifications
        DB::table('notifications')->insert([
            [
                'user_id' => 1, // Sesuaikan dengan ID user yang sesuai
                'message' => 'Welcome to the academic system!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Sesuaikan dengan ID user yang sesuai
                'message' => 'New schedule uploaded for your class.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // Sesuaikan dengan ID user yang sesuai
                'message' => 'Reminder: Submit your assignment by tomorrow.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // Sesuaikan dengan ID user yang sesuai
                'message' => 'Final exam results are now available.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Sesuaikan dengan ID user yang sesuai
                'message' => 'Staff meeting scheduled for next week.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya...
        ]);
    }
}
