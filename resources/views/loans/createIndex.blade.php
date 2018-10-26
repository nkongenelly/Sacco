@extends('layouts.official')

@section('content')

<div class="container" id="searchMember" >
    <form id="searchMemberForm" name="searchMemberName">
    {{csrf_field()}}
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">Search Member Name</label>
            <input class="form-control" type="text" name="member_first_name">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Search</button>
        </div>
    </form>
</div>

<div id="membersList"></div>
<div id="createMemberSavings">
    
</div>


<script type="text/javascript">

var methods = ["GET", "POST"];
var baseUrl = "http://127.0.0.1:8000/";

//CREATE THE FORM 
// Dynamic function for calling webservices
function createObject(readyStateFunction,requestMethod,requestUrl, sendData = null){
    
    var obj = new XMLHttpRequest;

    obj.onreadystatechange = function(){
        if((this.readyState ==4) && (this.status ==200)){
            readyStateFunction(this.responseText);
        }
        
    };
    obj.open(requestMethod, requestUrl, true);
    if (requestMethod == 'POST'){
        
        obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded" );
        obj.setRequestHeader("X-CSRF-Token", document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        obj.send(sendData);
    }
    else 
    {
        obj.send();
    }
    }

    function showContent(e){
        //Get values submitted
        e.preventDefault();
        var member_first_name = document.forms['searchMemberName']['member_first_name'].value;
        //AJAX to get specified members detail.
        var create = createObject(showAllMembers, methods[0], baseUrl + 'searchMember/'+member_first_name);
        return false;

    }
    function showAllMembers(responseTxt){
        var responseObj = JSON.parse(responseTxt);
        var count =0,tData; 
        var tableData = "<div class='container'><table class = 'table table-bordered table-striped table-condensed'><tr><th>#</th><th>Name</th><th>National ID</th><th>Bank Account</th><th>Email</th><th colspan ='2'> Action</th></tr>";
        for(tData in responseObj){
            count++;
            tableData +="<tr><td>"+ count +"</td>";
            tableData +="<td>"+ responseObj[tData].member_first_name +"</td>";
            tableData +="<td>"+ responseObj[tData].member_national_id +"</td>";
            tableData +="<td>"+ responseObj[tData].member_bank_account_number +"</td>";
            tableData +="<td>"+ responseObj[tData].member_email +"</td>";
            tableData +="<td><a href = '#' class ='btn btn-info bt-sm' onclick = 'CreateSavings("+responseObj[tData].id+")'>Create Savings</a></td>";
            tableData +="<td><a href = '#' class ='btn btn-info bt-sm' onclick = 'submitVisitsForm("+responseObj[tData].patient_id+")'>View Member</a></td>";

        }
        tableData += "</div></table>";
        document.getElementById("membersList").innerHTML = tableData;
    }

    function CreateSavings(id){
        createObject(savingsCreation, methods[0], baseUrl +'loanApplication/' + id);
    }
    function savingsCreation(jsonResponse){
        //Display only the loan creation form
        document.getElementById('createMemberSavings').style.display ="block";
        document.getElementById('membersList').style.display ="none";
        document.getElementById('searchMember').style.display ="none";

       
                    //  alert(fields[1].type);
        var responseObj = JSON.parse(jsonResponse);
        var count=0,tData;

        var FormData ='<form action="/loansCreate" method="POST">';
        for(tData in responseObj){
            //Create the variables that change in each div so as to loop them in each input div dynamically
            var fields = [{label:"", type:"hidden", name:"member_id", value:responseObj[tData].id},
                    {label:"Member", type:"text", name:"member_name", value:responseObj[tData].member_first_name},
                    {label:"Loan Amount", type:"number", name:"loan_amount", value:""},
                     {label:"Loan Installments", type:"number", name:"loan_installments", value:""},
                     {label:"Loan Type", type:"number", name:"loan_type_id", value:""},
                     {label:"Grace Period", type:"number", name:"grace_period", value:""},
                     {label:"Application Date", type:"number", name:"application_date", value:""},
                     {label:"Loan Amount", type:"number", name:"interest_rate", value:""},];
                FormData +='<div class="container">';

            for(var i =0; i<fields.length; i++){
                FormData +='<div class = "form-group col-md-10"><br>';
                // FormData +='<br/>';
                FormData +='<label for="">'+fields[i].label+'</label>';
                FormData +='<input type="'+fields[i].type+'" name="'+fields[i].name+'" value="'+fields[i].value+'" class="form-control">';
                FormData +='</div>';
               
            }
            FormData +='<div class="form-group col-md-6">\
                        <button class="btn btn-primary sm" type="submit">Submit</button>\
                        </div>';
            FormData +='</div>';
            }
        // alert(responseObj[tData].member_first_name);
        
        FormData += "</form>";
        
        document.getElementById("createMemberSavings").innerHTML = FormData;
            }
    document.getElementById('searchMemberForm').addEventListener('submit',showContent);
</script>
@endsection