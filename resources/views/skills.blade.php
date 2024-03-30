<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')

    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts/navbar')

            <!-- Skills Section -->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-4"><span class="text-gradient d-inline">Skills</span></h1>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Display skills here -->
                        @foreach ($skills as $index => $skill)
                        <div class="col-md-6 mb-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0 h-100 position-relative">
                                <div class="bg-primary position-absolute top-0 start-0 end-0" style="height: 2px;"></div> <!-- Top outline -->
                                <div class="bg-primary position-absolute bottom-0 start-0 end-0" style="height: 2px;"></div> <!-- Bottom outline -->                   
                                <div class="bg-gradient-blue-to-white position-absolute top-0 bottom-0 start-0 end-0" style="width: 10px;"></div> <!-- Left color -->
                                <div class="bg-gradient-blue-to-white" style="width: 10px; height: 100%; position: absolute; right: 0; top: 0; border-radius: 4px 0 0 4px;"></div> <!-- Right color -->
                                <div class="card-body d-flex flex-column align-items-center" style="color: dark;">
                                    <!-- Skill Name -->
                                    <h4 class="fw-bold mb-3 text-center">{{ $skill->skillName }}</h4>
                                    <!-- Title for Experience -->
                                    <h5 class="fw-bold mb-2 text-muted ">Experience</h5>
                                    <!-- Display experience bar with years -->
                                    <div class="progress mb-3 w-75 position-relative" style="background-color: #d3e0f7; color: black;">
                                        @php
                                        // Calculate width based on yearsOfExperience, allowing values over 100
                                        $expWidth = $skill->yearsOfExperience > 100 ? '100%' : ($skill->yearsOfExperience / 100 * 100) . '%';
                                        @endphp
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $expWidth }};" aria-valuenow="{{ $skill->yearsOfExperience }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span class="position-absolute top-50 start-50 translate-middle">{{ $skill->yearsOfExperience }} years</span>
                                    </div>
                                    <!-- Title for Proficiency -->
                                    <h5 class="fw-bold mb-2 text-muted">Proficiency</h5>
                                    <!-- Display proficiency bar with percentage -->
                                    <div class="progress mb-4 w-75 position-relative" style="background-color: #dac5ff; color: black;">
                                        @php
                                        // Calculate width based on proficiencyLevel, allowing values over 100
                                        $width = $skill->proficiencyLevel > 100 ? '100%' : ($skill->proficiencyLevel / 100 * 100) . '%';
                                        @endphp
                                        <div class="progress-bar" role="progressbar" style="width: {{ $width }};" aria-valuenow="{{ $skill->proficiencyLevel }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span class="position-absolute top-50 start-50 translate-middle">{{ $skill->proficiencyLevel }}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add a new row after every two skills -->
                        @if (($index + 1) % 2 === 0 && $index + 1 !== count($skills))
                    </div>
                    <div class="row justify-content-center">
                        @endif
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-4"><span class="text-gradient d-inline">Services</span></h1>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Display services here -->
                        @foreach ($services as $index => $service)
                            @php
                                // Calculate column width class based on the number of services
                                $colWidthClass = count($services) === 1 || count($services) === 2 ? 'col-md-3' : 'col-md-6';
                            @endphp
                            <div class="{{ $colWidthClass }} mb-4" style="color: dark;">
                                <div class="card overflow-hidden shadow rounded-4 border-0 h-100" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $service->availability ? 'Available Service' : 'Not Available Service' }}">
                                <div class="bg-primary position-absolute top-0 start-0 end-0" style="height: 2px;"></div> <!-- Top outline -->
                                <div class="bg-primary position-absolute bottom-0 start-0 end-0" style="height: 2px;"></div> <!-- Bottom outline -->                                
                                <div class="bg-gradient-blue-to-white position-absolute top-0 bottom-0 start-0 end-0" style="width: 10px;"></div> <!-- Left color -->
                                <div class="bg-gradient-blue-to-white" style="width: 10px; height: 100%; position: absolute; right: 0; top: 0; border-radius: 4px 0 0 4px;"></div> <!-- Right color --> 
                                    <div class="card-body d-flex align-items-center bg-light">
                                        <!-- Picture -->
                                        <div class="image-container mb-3" style="height:100%; width: 220px;">
                                            <img class="img-fluid w-100 h-100 rounded-4 border border-primary" src="{{ $service->image }}" alt="Services Image" style="object-fit: cover;">
                                        </div>
                                        <!-- Service Details -->
                                        <div class="ms-4 flex-grow-1" style="flex: 1; max-width: 60%;">
                                            <!-- Availability -->
                                            <p class="position-relative top-0 start-0">
                                                <!-- Green or red dot -->
                                                <span class="{{ $service->availability ? 'text-success' : 'text-danger' }}">&#x25CF;</span>
                                                <!-- Service Name -->
                                                <span class="fw-bold ms-1">{{ $service->serviceName }}</span>
                                            </p>
                                            
                                            <!-- Service Description -->
                                            <p>{{ $service->serviceDescription }}</p>
                                            <!-- Duration -->
                                            <p>Duration: {{ $service->duration }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add a new row after every two services -->
                            @if (($index + 1) % 2 === 0 && $index + 1 !== count($services))
                                </div>
                                <div class="row justify-content-center">
                            @endif
                        @endforeach
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
