@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('students.store') }}" method="post">
    @csrf


    <div class="col">
        <label for="name" class="control-label">name</label>
        <input type="string" class="form-control" id="name" name="name" value="{{ old('name')}}"   required>

    <label for="phone" class="control-label">phone</label>
    <input type="string" class="form-control" id="phone" name="phone" value="{{ old('phone')}}"   required>
</div>
<div class="col">
    <label for="city" class="control-label">city</label>
    <input type="string" class="form-control" id="city" name="city" value="{{ old('city')}}"   required>

<label for="address" class="control-label">address</label>
<input type="string" class="form-control" id="address" name="address" value="{{ old('address')}}"   required>
</div>
                <button type="submit">حفظ</button>

</form>