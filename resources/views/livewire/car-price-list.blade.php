<div class="table-responsive">
    <h4>Daftar Harga Mobil</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Model</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>
                <td>{{ $car->merk }}</td>
                <td>{{ $car->model }}</td>
                <td>Rp {{ number_format($car->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>