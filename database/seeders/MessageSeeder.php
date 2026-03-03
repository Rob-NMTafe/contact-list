<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedMessages  = [
            [
                'name'=> 'Name1',
                'email'=> 'email1@mail.com',
                'subject'=> 'Subject1',
                'topic_id'=> 1,
                'message'=> 'Hello World',
                'read_at'=> null
            ],
            [
                'name'=> 'Name2',
                'email'=> 'email2@mail.com',
                'subject'=> 'Subject2',
                'topic_id'=> null,
                'message'=> 'Oopsie World',
                'read_at'=> null
            ],
            [
                'name'=> 'Name3',
                'email'=> 'email3@mail.com',
                'subject'=> 'Subject3',
                'topic_id'=> 100,
                'message'=> 'Goodbye World',
                'read_at'=> null
            ],

        ];

        foreach ($seedMessages as $message) {
            Message::create($message);
        }

    }
}
