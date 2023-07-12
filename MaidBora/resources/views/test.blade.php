<html>
    <body>
    <div class = "card-body"></div>    
    <table class = "table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First</th>
                    <th>LastName</th>
                    <th>Username</th>
                    <th>gender</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>IDNumber</th>
                    <th>county</th>
                    <th>subcounty</th>
                    <th>town</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->IDNumber }}</td>
                    <td>{{ $user->county }}</td>
                    <td>{{ $user->subcounty }}</td>
                    <td>{{ $user->town }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>