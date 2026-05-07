@extends('layout')

@section('content')
<h2>Data Kelas</h2>

<a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Tambah</a>

<!-- canvas start -->
<canvas id="chart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
new Chart(document.getElementById('chart'), {
    type: 'bar',
    data: {
        labels: ['Jan','Feb','Mar'],
        datasets: [{
            label: 'Siswa',
            data: [10,20,30]
        }]
    }
});
</script>

<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Level</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    @foreach($courses as $course)
    <tr>
        <td>{{ $course->title }}</td>
        <td>{{ $course->level }}</td>
        <td>{{ $course->price }}</td>
        <td>
            <a href="{{ route('courses.edit',$course->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('courses.destroy',$course->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection