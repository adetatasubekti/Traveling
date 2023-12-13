<h2>Create Ticket</h2>
<form action="{{ route('tickets.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="destination">Destination:</label>
    <input type="text" name="destination" required>
    <label for="price">Price:</label>
    <input type="number" name="price" required>
    <button type="submit">Submit</button>
</form>