<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')

    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts/navbar')

            <!-- Education Section -->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-4">
                        <h1 class="display-5 fw-bolder mb-4"><span class="text-gradient d-inline">Education</span></h1>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Display education details here -->
                        @foreach ($educations as $education)
                            <div class="col-md-3 mb-4">
                                <div class="card overflow-hidden shadow rounded-4 border-0" style="height: 100%; ">
                                    <!-- Top Color -->
                                    <div class="top-color" style="background-color: {{ $education->institutionColor }}; height: 20px;"></div>
                                    <div class="card-body d-flex flex-column align-items-center" style="color: {{ $education->institutionTextColor}};">
                                        <!-- Level of Education -->
                                        <h4 class="fw-bold mb-3 text-center" style="flex: 1; max-width: 80%;">{{ $education->levelOfEducation }}</h4>
                                        <!-- Institution Name -->
                                        <p class=" mb-3 text-center">{{ $education->institutionName }}</p>
                                        <!-- Location -->
                                        <p class="mb-3 text-center">{{ $education->location }}</p>
                                        <!-- Years Attended -->
                                        <p class="mb-3 text-center">
                                            {{ $education->yearStarted }} -
                                            @if($education->yearGraduated)
                                                {{ $education->yearGraduated }}
                                            @else
                                                ????
                                            @endif
                                        </p>
                                        <!-- Image (if available) -->
                                        <div class="image-container mb-3" style="flex: 2; max-width: 80%;"> <!-- Added margin-top -->
                                            <img class="img-fluid" src="{{ $education->image }}" alt="Education Image" style="object-fit: cover;">
                                        </div>
                                    </div>
                                    <!-- Bottom Color -->
                                    <div class="bottom-color" style="background-color: {{ $education->institutionColor }}; height: 20px;"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Know Me Section -->
            <section class="py-5">
                <div class="container px-5 mb-5">
                <div class="text-center mb-4">
                    <h1 class="display-5 fw-bolder mb-4"><span class="text-gradient d-inline">Know ME</span></h1>
                </div>
                    <div class="row justify-content-center align-items-center">
                        <!-- Name Card -->
                        <div class="col-md-6 mb-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0 position-relative"> <!-- Added position-relative -->
                                <div class="bg-primary" style="width: 5px; height: 100%; position: absolute; right: 0; top: 0; border-radius: 4px 0 0 4px;"></div> <!-- Changed position to right -->
                                <div class="card-body pr-5 pl-0"> <!-- Added right padding and removed left padding -->
                                    <h5 class="card-title text-end text-gradient ">Name <i class="bi bi-person"></i></h5>
                                    @foreach ($contactInformations as $contactInfo)
                                    <p class="card-text text-end">{{ $contactInfo->name }}</p> <!-- Added text-end class to align text to the right -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Email Address Card -->
                        <div class="col-md-6 mb-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="bg-primary" style="width: 5px; height: 100%; position: absolute; left: 0; top: 0; border-radius: 0 4px 4px 0;"></div> <!-- Added colored sidebar -->
                                <div class="card-body pl-5"> <!-- Added left padding -->
                                    <h5 class="card-title text-gradient"><i class="bi bi-envelope"></i> Email Address</h5>
                                    @foreach ($contactInformations as $contactInfo)
                                    <p class="card-text">{{ $contactInfo->emailAddress }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Phone Number Card -->
                        <div class="col-md-6 mb-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0 position-relative"> <!-- Added position-relative -->
                                <div class="bg-primary" style="width: 5px; height: 100%; position: absolute; right: 0; top: 0; border-radius: 4px 0 0 4px;"></div> <!-- Changed position to right -->
                                <div class="card-body pr-5 pl-0"> <!-- Added right padding and removed left padding -->
                                    <h5 class="card-title text-end text-gradient">Phone Number <i class="bi bi-telephone"></i></h5> <!-- Added text-end class to align text to the right -->
                                    @foreach ($contactInformations as $contactInfo)
                                    <p class="card-text text-end">{{ $contactInfo->phoneNumber }}</p> <!-- Added text-end class to align text to the right -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Address Card -->
                        <div class="col-md-6 mb-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="bg-primary" style="width: 5px; height: 100%; position: absolute; left: 0; top: 0; border-radius: 0 4px 4px 0;"></div> <!-- Added colored sidebar -->
                                <div class="card-body pl-5"> <!-- Added left padding -->
                                    <h5 class="card-title text-gradient"><i class="bi bi-geo-alt"></i> Address</h5>
                                    @foreach ($contactInformations as $contactInfo)
                                    <p class="card-text">{{ $contactInfo->address }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Describe Card -->
                        <div class="col-md-12 mb-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0 position-relative"> <!-- Added position-relative -->
                                <div class="bg-primary" style="width: 5px; height: 100%; position: absolute; left: 0; top: 0; bottom: 0;"></div> <!-- Added color on the left -->
                                <div class="bg-primary" style="width: 5px; height: 100%; position: absolute; right: 0; top: 0; bottom: 0;"></div> <!-- Added color on the right -->
                                <div class="card-body text-center"> <!-- Centered the text -->
                                    <h5 class="card-title text-gradient">Hey there!</h5>
                                    <p class="card-text">
                                        @foreach ($contactInformations as $contactInfo)
                                            {!! $contactInfo->describe !!}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
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
