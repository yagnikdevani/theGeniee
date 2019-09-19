<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif


{!! Form::open(['route' => 'merchant_registration_save','enctype'=>"multipart/form-data"]) !!}

<div class="form-group">
    {!! Form::label('fullname', 'Your Full Name') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('companyName', 'Company Name') !!}
    {!! Form::text('companyName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('mobileNumber', 'Mobile Number') !!}
    {!! Form::text('mobileNumber', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('businessFilingStatus', 'Business Filing Status') !!}
    {!! Form::select('businessFilingStatus', [
                        'soleProprietorship' => 'Sole Proprietorship',
                        'partnership' => 'Partnership',
                        'privateLimited' => 'Private Limited',
                        'publicLimited' => 'Public Limited',
                        'llp' => 'LLP',
                        'trust' => 'Trust',
                        'society' => 'Society',
                        'individual' => 'Individual',
                        ], ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('businessType', 'Business Type') !!}
    {!! Form::select('businessType', [
                        'travelTourism' => 'Travel & Tourism',
                        'airlines' => 'Airlines ',
                        'ngo' => 'NGO',
                        'healthcareHospitals' => 'Healthcare and Hospitals',
                        'eventsConferences' => 'Events & Conferences',
                        'realEstate' => 'Real Estate',
                        'financialServices' => 'Financial Services',
                        'insurance' => 'Insurance',
                        'ITSoftwareNetworking' => 'IT & Software/Networking',
                        'ecommerce' => 'Ecommerce',
                        'others' => 'Others',
                        'professionalServices' => 'Professional Services',
                        'educationalServices' => 'Educational Services',
                       ], ['class' => 'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('businessCategory', 'Business Category') !!}
    {!! Form::select('businessCategory', [], ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('businessSubCategory', 'Business Sub Category') !!}
    {!! Form::select('businessSubCategory', [], ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('businessName', 'Business Name') !!}
    {!! Form::text('businessName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('businessAddress', 'Business Address') !!}
    {!! Form::textarea('businessAddress', null, ['id' => 'businessAddress', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('same-both-address', 'Is your Operating address same as business address?') !!}
    {!! Form::radio('same-both-address', 'yes', ['class' => 'form-control']) !!} Yes
    {!! Form::radio('same-both-address', 'no', ['class' => 'form-control']) !!} No
</div>

<div class="form-group">
    {!! Form::label('operatingAddress', 'Operating Address') !!}
    {!! Form::textarea('operatingAddress', null, ['id' => 'operatingAddress', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('pincode', 'Pincode') !!}
    {!! Form::text('pincode', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('operatingPincode', 'Operating Pincode') !!}
    {!! Form::text('operatingPincode', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('appDetail', 'Website/App Details') !!}
    {!! Form::text('appDetail', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('panNumber', 'PAN/TAN Number') !!}
    {!! Form::text('panNumber', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cin', 'Corporate Identification Number (CIN)') !!}
    {!! Form::text('cin' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('din', 'Director Identification Number (DIN)') !!}
    {!! Form::text('din' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('gst', 'GST Number (Goods and Service Tax)*') !!}
    {!! Form::text('gst' , null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('document', 'Upload Document') !!}
    {!! Form::file('document') !!}

    {!! NoCaptcha::renderJs() !!}
   {!! NoCaptcha::display() !!}  
</div>


{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}