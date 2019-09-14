@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
{{ Form::open(['url' => 'merchant/saveregistration','files'=>'true']) }}
<?php 
echo Form::label('fullname', 'Your Full Name');
echo Form::text('fullname');
echo "<br>";
echo "<br>";    
echo Form::label('companyName', 'Company Name');
echo Form::text('companyName');
echo "<br>";
echo "<br>";    
echo Form::label('email', 'E-mail');
echo Form::text('email');
echo "<br>";
echo "<br>";    
echo Form::label('mobileNumber', 'Mobile Number');
echo Form::text('mobileNumber');
echo "<br>";
echo "<br>";    
echo Form::label('businessFilingStatus', 'Business Filing Status');
echo Form::select('businessFilingStatus', 
                        [
                        'soleProprietorship' => 'Sole Proprietorship',
                        'partnership' => 'Partnership',
                        'privateLimited' => 'Private Limited',
                        'publicLimited' => 'Public Limited',
                        'llp' => 'LLP',
                        'trust' => 'Trust',
                        'society' => 'Society',
                        'individual' => 'Individual',
                        ], 
                );
echo "<br>";
echo "<br>";    
echo Form::label('businessType', 'Business Type');
echo Form::select('businessType', 
                        [
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
                       ], 
                );
echo "<br>";
echo "<br>";    
echo Form::label('businessCategory', 'Business Category');
echo Form::select('businessCategory', 
                        [
                        
                        ], 
                );
echo "<br>";
echo "<br>";    
echo Form::label('businessSubCategory', 'Business Sub Category');
echo Form::select('businessSubCategory', 
                        [
                       
                        ], 
                );
echo "<br><br>";
echo Form::label('businessName', 'Business Name');
echo Form::text('businessName');
echo "<br><br>";
echo Form::label('businessAddress', 'Business Address');
echo Form::textarea('businessAddress', null, ['id' => 'businessAddress', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none']);
echo "<br><br>";
echo Form::label('pincode', 'Pincode');
echo Form::text('pincode');
echo "<br><br>";
echo Form::label('same-both-address', 'Is your Operating address same as business address?');
echo "<br>";
echo Form::radio('same-both-address', 'Yes');
echo "Yes";
echo Form::radio('same-both-address', 'No');
echo "No<br>";
echo "<br><br>";
echo Form::label('operatingAddress', 'Operating Address');
echo Form::textarea('operatingAddress', null, ['id' => 'operatingAddress', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none']);
echo "<br><br>";
echo Form::label('operatingPincode', 'Pincode');
echo Form::text('operatingPincode');
echo "<br><br>";
echo Form::label('appDetail', 'Website/App Details');
echo Form::text('appDetail');
echo "<br><br>";
echo Form::label('panNumber', 'PAN/TAN Number');
echo Form::text('panNumber');
echo "<br><br>";
echo Form::label('cin', 'Corporate Identification Number (CIN)');
echo Form::text('cin');
echo "<br><br>";
echo Form::label('din', 'Director Identification Number (DIN)');
echo Form::text('din');
echo "<br><br>";
echo Form::label('gst', 'GST Number (Goods and Service Tax)*');
echo Form::text('gst');
echo "<br><br>";
echo Form::label('document', 'Upload Document');
echo Form::file('document');?>
   {!! NoCaptcha::renderJs() !!}
   {!! NoCaptcha::display() !!}     
<?php 
echo "<br>";
echo Form::submit('Register Now');
echo Form::button('cancel');
?>
{{ Form::close() }}