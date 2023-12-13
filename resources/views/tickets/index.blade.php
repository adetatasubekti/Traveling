<h2>Ticket List</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Destination</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->name }}</td>
                <td>{{ $ticket->destination }}</td>
                <td>{{ $ticket->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>