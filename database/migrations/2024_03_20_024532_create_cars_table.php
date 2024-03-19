<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker; // Import Faker library
use App\Models\Car; // Import model Car
use App\Models\Mf; // Import model Mf

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('model');
            $table->date('produced_on');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('mf_id'); // Thêm cột mf_id
            $table->foreign('mf_id')->references('id')->on('mfs'); // Thêm khóa ngoại
            $table->timestamps();
        });

        // // Sử dụng Faker để tạo dữ liệu giả định
        // $faker = Faker::create();
        // $mfIds = Mf::pluck('id')->toArray(); // Lấy danh sách id từ bảng "mfs"

        // // Tạo 50 dữ liệu mẫu cho bảng "cars"
        // for ($i = 0; $i < 50; $i++) {
        //     Car::create([
        //         'id' => $i + 1,
        //         'description' => $faker->sentence,
        //         'model' => $faker->word,
        //         'produced_on' => $faker->date,
        //         'image' => $faker->imageUrl,
        //         'mf_id' => $faker->randomElement($mfIds),
        //     ]);
        // Schema::dropIfExists('cars');
    }
};
