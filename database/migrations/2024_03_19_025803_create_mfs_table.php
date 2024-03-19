<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker; // Import Faker library
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
        Schema::create('mfs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mf_name');
            $table->timestamps();
        });

        // Sử dụng Faker để tạo dữ liệu giả định
        // $faker = Faker::create();

        // // Tạo 50 dữ liệu mẫu cho bảng "mfs"
        // for ($i = 0; $i < 50; $i++) {
        //     Mf::create([
        //         'id' => $i + 1,
        //         'mf_name' => $faker->company,
        //     ]);
        // }
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mfs');
    }
};
