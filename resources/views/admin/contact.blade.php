@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid" style="overflow-y: auto; height: 90vh;">
            <table class="table border py-3 text-center">
                <thead class="bg-warning">
                    <tr class="border">
                        <th scope="col">id</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Title</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">files</th>
                        <th scope="col">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <th>{{ $contact->id }}</th>
                            <th>{{ $contact->fullname }}</th>
                            <td class="text-decoration-underline text-primary">{{ $contact->email }}</td>
                            <td>{{ $contact->title }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td><a href="{{ route('ds-downfile', $contact->id) }}">download file</a></td>
                            <td class="d-flex" style="gap: 5px; justify-content: center">
                                {{-- @if ($contact->status == 0)
                                    <a class="btn btn-success" name="btnUpdate" id="btnUpdate" href="#"
                                        data-bs-toggle="modal" data-bs-target="#myModalComfirmContact{{ $contact->id }}">
                                        Đã liên hệ
                                    </a>
                                @else
                                    <i class="fa-solid fa-check"></i>
                                @endif --}}

                                {{-- <div class="modal" id="myModalComfirmContact{{ $contact->id }}">
                                    <form method="POST" action="{{ route('comfirmContact', $contact->id) }}">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header bg-warning">
                                                    <h6 class="modal-title">Khách hàng:
                                                        <strong>{{ $contact->name }}</strong>
                                                    </h6>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <input class="d-none" type="text" name="status" value="1">
                                                        <p class="text-center">
                                                            Bạn có chắc đã liên hệ với khách hàng:
                                                            <strong class="h6">{{ $contact->name }}</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer"
                                                    style="display: flex; justify-content: space-around;">
                                                    <form method="post"
                                                        action="{{ route('comfirmContact', ['id' => $contact->id]) }}">
                                                        @csrf
                                                        <input style="width: 90px !important" type="submit"
                                                            class="btn btn-success" value="Yes" />
                                                    </form>

                                                    <input style="width: 90px !important" type="button"
                                                        class="btn btn-danger" data-bs-dismiss="modal" value="No">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
