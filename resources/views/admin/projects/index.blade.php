

@php
use App\Functions\Helper as Helper;
@endphp

@extends('layouts.admin')



@section('content')

    <div class="p-5">

        <h1 class="text-center">Progetti</h1>

        <table class="table my-5">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Image</th>
                <th scope="col">Interagisci</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project )

                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{Helper::formatDate($project->update_at)}}</td>
                    <td><img class="" src="{{asset('storage/' . $project->image)}}" alt="{{$project->name}}" onerror="this.src=`/img/placeholder.png`"></td>
                    <td >
                        <a class="btn btn-success me-2" href="{{route('admin.projects.show',$project)}}"><i class="fa-solid fa-eye"></i></a>

                        <a class="btn btn-warning me-2" href="{{route('admin.projects.edit',$project)}}" ><i class="fa-solid fa-pencil"></i></a>

                        <form action="{{route('admin.projects.destroy',$project)}}" method="post" onsubmit="return confirm('sei sicuro di voler eliminare il progetto?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" ><i class="fa-solid fa-trash"></i></button>

                        </form>




                    </td>
                </tr>

                @empty

                Nessun risultato

                @endforelse


            </tbody>
        </table>

        {{$projects->links('pagination::bootstrap-5')}}


    </div>




@endsection

