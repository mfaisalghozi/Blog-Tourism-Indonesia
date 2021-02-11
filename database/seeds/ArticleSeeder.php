<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Pantai Indonesia Terbaik',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.',
            'image' => '/images/indo-beach-nature.jpg'
        ]);
        DB::table('articles')->insert([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Perjalanan Menuju KM5000 diatas laut',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.',
            'image' => '/images/indo-mountain-nature.jpg'
        ]);
        DB::table('articles')->insert([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Weekend santai, berkunjung ke Universal Studio',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.',
            'image' => '/images/coaster-unsplash.jpg'
        ]);
        DB::table('articles')->insert([
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'Estetika Jakarta Di Tengah Kepadatan !',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.',
            'image' => '/images/indo-city-nature.jpg'
        ]);
        DB::table('articles')->insert([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Hutan Tersejuk di indonesia !',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.',
            'image' => '/images/indo-nature.jpg'
        ]);
    }
}
