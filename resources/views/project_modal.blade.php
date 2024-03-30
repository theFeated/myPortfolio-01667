<div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1" aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-gradient" id="projectModalLabel{{ $project->id }}" style="font-size: 36px;">{{ $project->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center border border-dark rounded p-3 mb-3 bg-gradient-blue-to-white">
                        <div class="col-md-10 col-lg-8 col-xl-7 border border-dark bg-light rounded">
                            <div class="col-md-12"> <!-- Center the image -->
                                <div class="image-container mb-3 mt-3"> <!-- Added mt-3 class for top margin -->
                                    <img class="img-fluid w-100 h-100 rounded-4 border border-dark" src="{{ $project->image }}" alt="Project Image" style="max-height: 400px; max-width: 100%;" />
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <a href="{{ $project->link }}">{{ $project->link }}</a>
                                </div>
                            </div> 
                            <hr class="my-4">
                            <div class="border border-dark rounded p-3 mb-3">
                                <div class="row">
                                    <div class="col-md-3 border-end">
                                        <strong>Date Completed:</strong><br>
                                        {{ $project->date_completed->format('Y-m-d') }}
                                    </div>
                                    <div class="col-md-3 border-end">
                                        <strong>Role:</strong><br>
                                        {{ $project->role }}
                                    </div>
                                    <div class="col-md-3 border-end">
                                        <strong>Category:</strong><br>
                                        {{ $project->category }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Duration:</strong><br>
                                        {{ $project->duration }}
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h2 class="section-heading">Client</h2>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <p>{!! $project->client !!}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h2 class="section-heading">Description</h2>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <p>{!! $project->description !!}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h2 class="section-heading">Technology Utilized</h2>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <p>{!! $project->tech_utilized !!}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h2 class="section-heading">Feedback</h2>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <p>{!! $project->feedback !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
