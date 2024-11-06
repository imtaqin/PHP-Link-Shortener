<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('settings')->whereIn('name', ['captcha_contact', 'captcha_registration', 'captcha_shorten'])->delete();

        DB::table('settings')->insert(
            [
                ['name' => 'force_https', 'value' => '1'],
                ['name' => 'contact_form', 'value' => '0'],
                ['name' => 'contact_address', 'value' => ''],
                ['name' => 'contact_email_public', 'value' => ''],
                ['name' => 'contact_phone', 'value' => '0'],
                ['name' => 'request_http_version', 'value' => '1.1'],
            ]
        );

        Schema::table('pages', function ($table) {
            $table->string('language', 16)->after('visibility')->nullable();
        });

        DB::statement("UPDATE `pages` SET `language` = :language", ['language' => config('settings.locale')]);

        DB::table('settings')->where('name', '=', 'request_user_agent')->update(['value' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
