<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')

    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts/navbar')

            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach ($projects as $project)
                            @include('project_modal', ['project' => $project])
                            <div class="col-md-4 mb-4">
                                <div class="card overflow-hidden shadow rounded-4 border border-primary h-100">
                                    <!-- Top Color -->
                                    <div class="bg-gradient-blue-to-white" style="height: 10px;"></div>
                                    <div class="card-body d-flex flex-column align-items-center text-primary">
                                        <!-- Image -->
                                        <div class="image-container mb-3" style="height: 200px; width: 300px;">
                                            <img class="img-fluid w-100 h-100 object-fit-cover rounded-4 border border-primary" src="{{ $project->image }}" alt="Project Image" />
                                        </div>
                                        <!-- Content -->
                                        <div class="text-center">
                                            <h3 class="fw-bold mb-3 text-center align-bottom text-gradient">{{ $project->title }}</h3>
                                        </div>
                                        <!-- Spacer -->
                                        <div class="flex-grow-1"></div>
                                            <div class="text-center mt-auto">
                                                <p class="mb-0"><strong>Role:</strong></p><p> {{ $project->role }}</p>
                                                <p class="mb-0"><strong>Category:</strong></p> 
                                                <p>{{ $project->category }}</p>
                                                <div class="feedback">
                                                    <p class="mb-0"><strong>Date Completed:</strong></p>
                                                    <p class="">{{ $project->date_completed->format('Y-m-d') }}</p> <!-- Format date to display only the date -->
                                                </div>
                                            </div>
                                        <!-- Spacer -->
                                        <div class="flex-grow-1"></div>
                                        <!-- Show more button -->
                                        <div class="text-center mt-auto">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project->id }}">Read more</button>
                                        </div>
                                    </div>
                                    <!-- Bottom Color -->
                                    <div class="bg-gradient-blue-to-white" style="height: 10px;"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        <ul class="pagination">
                            @if ($projects->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $projects->previousPageUrl() }}" rel="prev">Previous</a>
                                </li>
                            @endif

                            @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                                @if ($page == $projects->currentPage())
                                    <li class="page-item active">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            @if ($projects->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $projects->nextPageUrl() }}" rel="next">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                </div>
            </section>

            <!-- Call to action section-->
            @include('layouts/callToAction')
            
        </main>
        <!-- Footer-->
        @include('layouts/footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>
