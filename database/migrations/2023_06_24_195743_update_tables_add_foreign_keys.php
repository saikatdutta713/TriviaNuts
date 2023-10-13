<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablesAddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('badge_id')->references('badge_id')->on('badges');
            $table->foreign('newsletter_id')->references('newsletter_id')->on('newsletters');
        });

        Schema::table('quizzes', function (Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('set_id')->references('set_id')->on('sets');
        });

        Schema::table('quiz_participants', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('quiz_id')->references('quiz_id')->on('quizzes');
            $table->foreign('question_id')->references('question_id')->on('questions');
            $table->foreign('answer_id')->references('answer_id')->on('user_answers')->onDelete('cascade');
            $table->foreign('score_id')->references('score_id')->on('scores')->onDelete('cascade');
            $table->foreign('badge_id')->references('badge_id')->on('badges');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('categories');
        });

        Schema::table('user_answers', function (Blueprint $table) {
            $table->foreign('question_id')->references('question_id')->on('questions');
            // $table->foreign('participant_id')->references('participant_id')->on('quiz_participants');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('quiz_id')->references('quiz_id')->on('quizzes');
        });

        Schema::table('sets', function (Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('categories');
        });

        Schema::table('scores', function (Blueprint $table) {
            $table->foreign('quiz_id')->references('quiz_id')->on('quizzes');
            // $table->foreign('participant_id')->references('participant_id')->on('quiz_participants');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('badge_id')->references('badge_id')->on('badges');
        });

        Schema::table('badges', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
        });

        Schema::table('user_quiz_progresses', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('quiz_id')->references('quiz_id')->on('quizzes');
        });

        Schema::table('forum_answers', function (Blueprint $table) {
            $table->foreign('post_id')->references('post_id')->on('forum_posts');
            $table->foreign('user_id')->references('user_id')->on('users');
        });

        Schema::table('forum_posts', function (Blueprint $table) {
            $table->foreign('answer_id')->references('answer_id')->on('forum_answers')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop foreign key constraints in the reverse order they were added
        Schema::table('forum_posts', function (Blueprint $table) {
            $table->dropForeign(['answer_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('forum_answers', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('user_quiz_progresses', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['quiz_id']);
        });

        Schema::table('badges', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('scores', function (Blueprint $table) {
            $table->dropForeign(['quiz_id']);
            // $table->dropForeign(['participant_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['badge_id']);
        });

        Schema::table('sets', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('user_answers', function (Blueprint $table) {
            $table->dropForeign(['question_id']);
            // $table->dropForeign(['participant_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['quiz_id']);
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('quiz_participants', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['quiz_id']);
            $table->dropForeign(['question_id']);
            $table->dropForeign(['answer_id']);
            $table->dropForeign(['score_id']);
            $table->dropForeign(['badge_id']);
        });

        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['set_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['badge_id']);
            $table->dropForeign(['newsletter_id']);
        });
    }
}