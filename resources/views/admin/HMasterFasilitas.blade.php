@extends('template.sidebaradmin')
@section("title", "Dashboard")


@section("content")


{{-- <h1>Welcome Admin</h1> --}}
<h1>Master Fasilitas</h1>
<a href="{{url('/admin/Htambahfasilitas')}}"><button class="btn btn-success">Tambah Fasilitas</button></a>

<table class="table table-info">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Fasilitas</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < count($data); $i++)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$data[$i]->nama_fasilitas}}</td>
            <td>
                <a href="{{url('/admin/deletefasilitas/'.$data[$i]->id)}}"><button>Delete</button></a>
                {{-- <button type="submit" class="show_confirm">Delte</button> --}}
            </td>
        </tr>
      @endfor

    </tbody>
  </table>




  </script>

@endsection

