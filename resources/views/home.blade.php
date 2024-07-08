<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Movies From DB</title>
        @vite("resources/js/app.js")
    </head>

    <body>
        <main>
            <section class="container my-5">
                <h1 class="display-4 fw-bold text-light mb-5 text-center">
                    Movies From DB
                </h1>
                <div
                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4"
                >
                    @foreach ($movies as $movie)
                        <div class="col text-center">
                            <div class="card h-100">
                                <img
                                    class="poster"
                                    src="{{ Vite::asset("resources/img/" . $movie["id"] . ".jpg") }}"
                                    alt="{{ $movie["original_title"] }}"
                                />

                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $movie["original_title"] }}
                                    </h5>
                                    <p>{{ $movie["title"] }}</p>
                                    <h6 class="text-capitalize">
                                        {{ $movie["nationality"] }} -
                                        {{ $movie["vote"] }}
                                        <img
                                            class="star"
                                            src="{{ Vite::asset("resources/img/star.svg") }}"
                                            alt="Vote Star"
                                        />
                                    </h6>
                                    <span class="fw-semibold">
                                        Release date:
                                    </span>
                                    <span>{{ $movie["date"] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
    </body>
</html>
