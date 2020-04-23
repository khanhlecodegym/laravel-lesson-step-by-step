<div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name="name" value="{{ old('name') ?? $customer->name }}" class="form-control">
    <p class="text-warning">{{ $errors->first('name') }}</p>
</div>
<div class="form-group">
    <label for="email">Email: </label>
    <input type="text" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">
    <p class="text-warning">{{ $errors->first('email') }}</p>
</div>

<div class="form-group">
    <label for="active">Status: </label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        @foreach ($customer->activeOPtions() as $activeOptionKey => $activeOptionValue)
           <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="company_id">Company: </label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
</div>

 @csrf
