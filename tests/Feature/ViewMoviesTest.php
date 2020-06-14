<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list' => $this->fakeGenres(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        $response->assertSee('Action, Crime, Thriller');
        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');
    }

    private function fakePopularMovies()
    {
        return Http::response([
                'results' =>
                    [
                        [
                        "popularity" => 122.637,
                        "vote_count" => 114,
                        "video" => false,
                        "poster_path" => "/ygCQnDEqUEIamBpdQdDYnFfxvgM.jpg",
                        "id" => 339095,
                        "adult" => false,
                        "backdrop_path" => "/t93doi7EzoqLFckidrGGnukFPwd.jpg",
                        "original_language" => "en",
                        "original_title" => "Fake Movie",
                        "genre_ids" => [
                            28,
                            80,
                            53
                        ],
                        "title" => "Fake Movie",
                        "vote_average" => 5.6,
                        "overview" => "In the not-too-distant future, where as a final response to crime and terrorism, the U.S. government plans to broadcast a signal that will make it impossible for anyone to knowingly break the law.",
                        "release_date" => "2020-06-05",
                        ]
                    ]
            ],
        200);
    }

    private function fakeNowPlayingMovies()
    {
        return Http::response([
                'results' =>
                    [
                        [
                        "popularity" => 122.637,
                        "vote_count" => 114,
                        "video" => false,
                        "poster_path" => "/ygCQnDEqUEIamBpdQdDYnFfxvgM.jpg",
                        "id" => 339095,
                        "adult" => false,
                        "backdrop_path" => "/t93doi7EzoqLFckidrGGnukFPwd.jpg",
                        "original_language" => "en",
                        "original_title" => "Now Playing Fake Movie",
                        "genre_ids" => [
                            28,
                            80,
                            53
                        ],
                        "title" => "Now Playing Fake Movie",
                        "vote_average" => 5.6,
                        "overview" => "In the not-too-distant future, where as a final response to crime and terrorism, the U.S. government plans to broadcast a signal that will make it impossible for anyone to knowingly break the law.",
                        "release_date" => "2020-06-05",
                        ]
                    ]
            ],
        200);
    }

    private function fakeGenres()
    {
        return Http::response([
                'genres' => [
                    [
                    "id" => 28,
                    "name" => "Action",
                    ],
                    [
                    "id" => 12,
                    "name" => "Adventure",
                    ],
                    [
                    "id" => 16,
                    "name" => "Animation",
                    ],
                    [
                    "id" => 35,
                    "name" => "Comedy",
                    ],
                    [
                    "id" => 80,
                    "name" => "Crime",
                    ],
                    [
                    "id" => 99,
                    "name" => "Documentary",
                    ],
                    [
                    "id" => 18,
                    "name" => "Drama",
                    ],
                    [
                    "id" => 10751,
                    "name" => "Family",
                    ],
                    [
                    "id" => 14,
                    "name" => "Fantasy",
                    ],
                    [
                    "id" => 36,
                    "name" => "History",
                    ],
                    [
                    "id" => 27,
                    "name" => "Horror",
                    ],
                    [
                    "id" => 10402,
                    "name" => "Music",
                    ],
                    [
                    "id" => 9648,
                    "name" => "Mystery",
                    ],
                    [
                    "id" => 10749,
                    "name" => "Romance",
                    ],
                    [
                    "id" => 878,
                    "name" => "Science Fiction",
                    ],
                    [
                    "id" => 10770,
                    "name" => "TV Movie",
                    ],
                    [
                    "id" => 53,
                    "name" => "Thriller",
                    ],
                    [
                    "id" => 10752,
                    "name" => "War",
                    ],
                    [
                    "id" => 37,
                    "name" => "Western",
                    ],
                ]
            ],
        200);
    }

}
