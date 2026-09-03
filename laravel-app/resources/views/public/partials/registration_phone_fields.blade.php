@php($phoneCountries = config('registration.phone_countries', []))
<div class="field">
  <label for="country">Mobile country/region</label>
  <select id="country" name="country" data-phone-country required aria-describedby="{{ $errors->has('country') ? 'country-error' : '' }}">
    @foreach($phoneCountries as $code => $country)
      <option value="{{ $code }}" data-dial="{{ $country['dial_code'] }}" data-length="{{ $country['length'] }}" data-hint="{{ $country['hint'] }}" @selected(old('country', 'AE') === $code)>{{ $country['label'] }} ({{ $country['dial_code'] }})</option>
    @endforeach
  </select>
  @error('country')<p class="field-error" id="country-error">{{ $message }}</p>@enderror
</div>
<div class="field">
  <label for="phone">Mobile number</label>
  <input id="phone" name="phone" value="{{ old('phone') }}" data-phone-number inputmode="numeric" autocomplete="tel-national" pattern="[0-9]+" required aria-describedby="phone-help {{ $errors->has('phone') ? 'phone-error' : '' }}">
  <small class="help" id="phone-help" data-phone-help></small>
  @error('phone')<p class="field-error" id="phone-error">{{ $message }}</p>@enderror
</div>
