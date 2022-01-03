@extends('layouts.default')

@section('content')
   <div class="card">
       <div class="card-header">
           <strong>Tambah Transaksi</strong>
       </div>
       <div class="card-body card-block">
            <form action="{{ route('transaction.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="number" class="form-control-label">Number</label>
                    <input type="text" name="number" value="{{ old('number') }}" class="form-control @error('number') is-invalid @enderror"/>
                    @error('number') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-control-label">Address</label>
                    <textarea name="address" class="ckeditor form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                    @error('address') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <table class="table" id="dynamicTable">
                    <tr>
                        <th>Product</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td class="select">
                            <select name="details[0] [products_id]" class="form-control @error('details[0] [products_id]') is-invalid @enderror" >
                                <option>Pilih Barang</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </td>
                        <td><input type="button" name="add" value="Add" id="addRemoveIp" class="btn btn-outline-dark"></td>
                    </tr>
                </table>

                <div class="form-group">
                    <label for="transaction_total" class="form-control-label">Total</label>
                    <input name="transaction_total" class="ckeditor form-control @error('transaction_total') is-invalid @enderror"/>
                    @error('transaction_total') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Add Transaction</button>
                </div>
            </form>
       </div>
   </div>
@endsection
@push('after-script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

    var i = 0;

    $("#addRemoveIp").click(function(){

        ++i;

        $("#dynamicTable").append('<tr>'+
        '<td><select name="details['+i+']" class="form-control @error('details[0] [products_id]') is-invalid @enderror" >'+
        '<option>Pilih Barang</option>'+
        '@foreach ($items as $item)'+
        '<option value="{{ $item->id }}">{{ $item->name }}</option>'+
        '@endforeach'+
        '</select>'+
        '</td>'+
        '</td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>'+
        '</tr>');
    });

    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });



</script>
@endpush
