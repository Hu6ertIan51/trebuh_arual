<h1>Ongoing Jobs </h1>
@if ($ongoingJobs->isEmpty())
        <p>You have no ongoing jobs.</p>
    @else
        <ul>
            @foreach ($ongoingJobs as $jobRequest)
                <li>
                    <p>Job Title: {{ $jobRequest->joblist->jobTitle }}</p>
                    <p>Employment Type: {{ $jobRequest->joblist->employmentType }}</p>
                    <p>Salary: {{ $jobRequest->joblist->salary }}</p>
                    <!-- Display other relevant job details here -->
                </li>
            @endforeach
        </ul>
    @endif