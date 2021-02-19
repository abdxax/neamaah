@extends('layouts.user')
@section('contac')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if($message = Session::get('msg'))

                    @if($message=='done')
                        <div class="col-10">
                            <div class="alert alert-success text-center">
                                تم اضافة الجمعية بنجاح
                            </div>
                        </div>
                    @elseif($message=='error')
                        <h1>Not work</h1>
                    @endif

                @endif
                <form method="POST">
                    @csrf
                    <div class="col-5">
                        <div class="form-group">
                            <input type="text" name="bankname" class="form-control" placeholder="اسم البنك ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="bankaccount" class="form-control" placeholder="رقم الحساب   ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Iban" class="form-control" placeholder="الايبان ">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group text-center">
                            <input type="submit" name="sub" value="اضافة  " class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>اسم البنك</th>
                        <th> رقم الحساب </th>
                        <th>الايبان </th>
                        <th>حذف </th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($count=1)
                      @foreach($bans as $bn)
                           <tr>
                               <td>{{$count++}}</td>
                               <td>{{$bn->BankName}}</td>
                               <td>{{$bn->Account}}</td>
                               <td>{{$bn->IBAN}}</td>
                               <td><a href="{{route('user.deletebank',$bn->id)}}" class="btn btn-danger">حذف </a> </td>
                           </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
