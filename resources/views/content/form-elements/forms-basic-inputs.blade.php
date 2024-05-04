@extends('layouts/layoutMaster')

@section('title', 'Basic Inputs - Forms')

@section('page-script')
@vite('resources/assets/js/form-basic-inputs.js')
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Forms /</span> Basic Inputs
</h4>

<div class="row">

  <!-- Float label (Outline) -->
  <div class="col-md">
    <div class="card mb-4">
      <h5 class="card-header">Float label (Outline)</h5>
      <div class="card-body">
        <div class="form-floating form-floating-outline">
          <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" aria-describedby="floatingInputHelp" />
          <label for="floatingInput">Name</label>
          <div id="floatingInputHelp" class="form-text">We'll never share your details with anyone else.</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Float label (Filled) -->
  <div class="col-md">
    <div class="card mb-4">
      <h5 class="card-header">Float label (Filled)</h5>
      <div class="card-body">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInputFilled" placeholder="John Doe" aria-describedby="floatingInputFilledHelp" />
          <label for="floatingInputFilled">Name</label>
          <span class="form-floating-focused"></span>
        </div>
        <div id="floatingInputFilledHelp" class="form-text">We'll never share your details with anyone else.</div>
      </div>
    </div>
  </div>

  <!-- Default -->
  <div class="col-md">
    <div class="card mb-4">
      <h5 class="card-header">Default</h5>
      <div class="card-body">
        <div>
          <label for="defaultFormControlInput" class="form-label">Name</label>
          <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
          <div id="defaultFormControlHelp" class="form-text">We'll never share your details with anyone else.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Form controls -->
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Form Controls</h5>
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
          <label for="exampleFormControlInput1">Email address</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="exampleFormControlSelect1">Example select</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
          <datalist id="datalistOptions">
            <option value="San Francisco"></option>
            <option value="New York"></option>
            <option value="Seattle"></option>
            <option value="Los Angeles"></option>
            <option value="Chicago"></option>
          </datalist>
          <label for="exampleDataList">Datalist example</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <select multiple class="form-select h-px-100" id="exampleFormControlSelect2" aria-label="Multiple select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="exampleFormControlSelect2">Example multiple select</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="exampleFormControlTextarea1" placeholder="Comments here..."></textarea>
          <label for="exampleFormControlTextarea1">Example textarea</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly />
          <label for="exampleFormControlReadOnlyInput1">Read only without value</label>
        </div>
        <div class="form-floating form-floating-outline">
          <input type="text" readonly class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="email@example.com" />
          <label for="exampleFormControlReadOnlyInputPlain1">Read only with value</label>
        </div>
      </div>
    </div>
  </div>

  <!-- Input Sizing -->
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Input Sizing</h5>
      <div class="card-body">
        <small class="text-light fw-medium">Input text</small>

        <div class="mt-2 mb-3">
          <label for="largeInput" class="form-label">Large input</label>
          <input id="largeInput" class="form-control form-control-lg" type="text" placeholder=".form-control-lg" />
        </div>
        <div class="mb-3">
          <label for="defaultInput" class="form-label">Default input</label>
          <input id="defaultInput" class="form-control" type="text" placeholder="Default input" />
        </div>
        <div>
          <label for="smallInput" class="form-label">Small input</label>
          <input id="smallInput" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" />
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <small class="text-light fw-medium">Input select</small>
        <div class="mt-2 mb-3">
          <label for="largeSelect" class="form-label">Large select</label>
          <select id="largeSelect" class="form-select form-select-lg">
            <option>Large select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="defaultSelect" class="form-label">Default select</label>
          <select id="defaultSelect" class="form-select">
            <option>Default select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div>
          <label for="smallSelect" class="form-label">Small select</label>
          <select id="smallSelect" class="form-select form-select-sm">
            <option>Small select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <small class="text-light fw-medium">Input Shape</small>
        <div class="mt-2">
          <label for="roundedInput" class="form-label">Rounded input</label>
          <input id="roundedInput" class="form-control rounded-pill" type="text" placeholder="Default input" />
        </div>
      </div>
    </div>
  </div>

  <!-- Default Checkboxes and radios & Default checkboxes and radios -->
  <div class="col-xl-6">

    <div class="card mb-4">
      <h5 class="card-header">Checkboxes and Radios</h5>
      <!-- Checkboxes and Radios -->
      <div class="row row-bordered g-0">
        <div class="col-md p-4">
          <small class="text-light fw-medium">Checkboxes</small>
          <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
            <label class="form-check-label" for="defaultCheck1">
              Unchecked
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked />
            <label class="form-check-label" for="defaultCheck2">
              Indeterminate
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
            <label class="form-check-label" for="defaultCheck3">
              Checked
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="disabledCheck1" disabled />
            <label class="form-check-label" for="disabledCheck1">
              Disabled Unchecked
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="disabledCheck2" disabled checked />
            <label class="form-check-label" for="disabledCheck2">
              Disabled Checked
            </label>
          </div>
        </div>
        <div class="col-md p-4">
          <small class="text-light fw-medium">Radio</small>
          <div class="form-check mt-3">
            <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio1" />
            <label class="form-check-label" for="defaultRadio1">
              Unchecked
            </label>
          </div>
          <div class="form-check">
            <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked />
            <label class="form-check-label" for="defaultRadio2">
              Checked
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="" id="disabledRadio1" disabled />
            <label class="form-check-label" for="disabledRadio1">
              Disabled unchecked
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="" id="disabledRadio2" disabled checked />
            <label class="form-check-label" for="disabledRadio2">
              Disabled checkbox
            </label>
          </div>
        </div>
      </div>
      <hr class="m-0" />
      <!-- Inline Checkboxes -->
      <div class="row row-bordered g-0">
        <div class="col-md p-4">
          <small class="text-light fw-medium d-block">Inline Checkboxes</small>
          <div class="form-check form-check-inline mt-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
            <label class="form-check-label" for="inlineCheckbox1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
            <label class="form-check-label" for="inlineCheckbox2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled />
            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
          </div>
        </div>
        <div class="col-md p-4">
          <small class="text-light fw-medium d-block">Inline Radio</small>
          <div class="form-check form-check-inline mt-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
            <label class="form-check-label" for="inlineRadio1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
            <label class="form-check-label" for="inlineRadio2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled />
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
          </div>
        </div>
      </div>
      <hr class="m-0" />
      <!-- Checkboxes & Radio Colors -->
      <div class="row row-bordered g-0">
        <div class="col-md p-4">
          <small class="text-light fw-medium d-block">Checkboxes Colors</small>

          <div class="form-check form-check-primary mt-3">
            <input class="form-check-input" type="checkbox" value="" id="customCheckPrimary" checked />
            <label class="form-check-label" for="customCheckPrimary">Primary</label>
          </div>
          <div class="form-check form-check-secondary">
            <input class="form-check-input" type="checkbox" value="" id="customCheckSecondary" checked />
            <label class="form-check-label" for="customCheckSecondary">Secondary</label>
          </div>
          <div class="form-check form-check-success">
            <input class="form-check-input" type="checkbox" value="" id="customCheckSuccess" checked />
            <label class="form-check-label" for="customCheckSuccess">Success</label>
          </div>
          <div class="form-check form-check-danger">
            <input class="form-check-input" type="checkbox" value="" id="customCheckDanger" checked />
            <label class="form-check-label" for="customCheckDanger">Danger</label>
          </div>
          <div class="form-check form-check-warning">
            <input class="form-check-input" type="checkbox" value="" id="customCheckWarning" checked />
            <label class="form-check-label" for="customCheckWarning"> Warning </label>
          </div>
          <div class="form-check form-check-info">
            <input class="form-check-input" type="checkbox" value="" id="customCheckInfo" checked />
            <label class="form-check-label" for="customCheckInfo"> Info </label>
          </div>
          <div class="form-check form-check-dark">
            <input class="form-check-input" type="checkbox" value="" id="customCheckDark" checked />
            <label class="form-check-label" for="customCheckDark"> Dark </label>
          </div>
        </div>
        <div class="col-md p-4">
          <small class="text-light fw-medium d-block">Radio Color</small>
          <div class="form-check form-check-primary mt-3">
            <input name="customRadioPrimary" class="form-check-input" type="radio" value="" id="customRadioPrimary" checked />
            <label class="form-check-label" for="customRadioPrimary"> Primary </label>
          </div>
          <div class="form-check form-check-secondary">
            <input name="customRadioSecondary" class="form-check-input" type="radio" value="" id="customRadioSecondary" checked />
            <label class="form-check-label" for="customRadioSecondary"> Secondary </label>
          </div>
          <div class="form-check form-check-success">
            <input name="customRadioSuccess" class="form-check-input" type="radio" value="" id="customRadioSuccess" checked />
            <label class="form-check-label" for="customRadioSuccess"> Success </label>
          </div>
          <div class="form-check form-check-danger">
            <input name="customRadioDanger" class="form-check-input" type="radio" value="" id="customRadioDanger" checked />
            <label class="form-check-label" for="customRadioDanger"> Danger </label>
          </div>
          <div class="form-check form-check-warning">
            <input name="customRadioWarning" class="form-check-input" type="radio" value="" id="customRadioWarning" checked />
            <label class="form-check-label" for="customRadioWarning"> Warning </label>
          </div>
          <div class="form-check form-check-info">
            <input name="customRadioInfo" class="form-check-input" type="radio" value="" id="customRadioInfo" checked />
            <label class="form-check-label" for="customRadioInfo"> Info </label>
          </div>
          <div class="form-check form-check-dark">
            <input name="customRadioDark" class="form-check-input" type="radio" value="" id="customRadioDark" checked />
            <label class="form-check-label" for="customRadioDark"> Dark </label>
          </div>
        </div>
      </div>
    </div>

    <!-- Switches -->
    <div class="card mb-4">
      <h5 class="card-header">Switches</h5>
      <div class="card-body">
        <div class="form-check form-switch mb-2">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
        </div>
        <div class="form-check form-switch mb-2">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
        </div>
        <div class="form-check form-switch mb-2">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
          <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
        </div>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
          <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
        </div>
      </div>
    </div>

    <!-- Range -->
    <div class="card mb-4 mb-xl-0">
      <h5 class="card-header">Range</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="formRange1" class="form-label">Example range</label>
          <input type="range" class="form-range" id="formRange1">
        </div>
        <div class="mb-3">
          <label for="disabledRange" class="form-label">Disabled range</label>
          <input type="range" class="form-range" id="disabledRange" disabled>
        </div>
        <div class="mb-3">
          <label for="formRange2" class="form-label">Min and max</label>
          <input type="range" class="form-range" min="0" max="5" id="formRange2">
        </div>
        <div>
          <label for="formRange3" class="form-label">Steps</label>
          <input type="range" class="form-range" min="0" max="5" step="0.5" id="formRange3">
        </div>
      </div>
    </div>

  </div>

  <div class="col-xl-6">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
      <h5 class="card-header">HTML5 Inputs</h5>
      <div class="card-body">
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="text" placeholder="{{ config('variables.templateName') }}" id="html5-text-input" />
          <label for="html5-text-input">Text</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="search" placeholder="Search ..." id="html5-search-input" />
          <label for="html5-search-input">Search</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="email" placeholder="john@example.com" id="html5-email-input" />
          <label for="html5-email-input">Email</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="url" placeholder="{{ config('variables.creatorUrl') }}" id="html5-url-input" />
          <label for="html5-url-input">URL</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="tel" placeholder="90-(164)-188-556" id="html5-tel-input" />
          <label for="html5-tel-input">Phone</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="password" placeholder="password" id="html5-password-input" />
          <label for="html5-password-input">Password</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="number" placeholder="18" id="html5-number-input" />
          <label for="html5-number-input">Number</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="datetime-local" id="html5-datetime-local-input" />
          <label for="html5-datetime-local-input">Datetime</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="date" id="html5-date-input" />
          <label for="html5-date-input">Date</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="month" id="html5-month-input" />
          <label for="html5-month-input">Month</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="week" id="html5-week-input" />
          <label for="html5-week-input">Week</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="time" id="html5-time-input" />
          <label for="html5-time-input">Time</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input class="form-control" type="color" id="html5-color-input" />
          <label for="html5-color-input">Color</label>
        </div>
        <div>
          <label for="html5-range" class="form-label">Range</label>
          <input type="range" class="form-range mt-3" id="html5-range" />
        </div>
      </div>
    </div>

    <!-- File input -->
    <div class="card">
      <h5 class="card-header">File input</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="formFile" class="form-label">Default file input example</label>
          <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Multiple files input example</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div>
          <label for="formFileDisabled" class="form-label">Disabled file input example</label>
          <input class="form-control" type="file" id="formFileDisabled" disabled>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
