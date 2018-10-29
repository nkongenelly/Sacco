@extends('layouts.official')

@section('content')

<div class="container" id="searchMember" >
    <form id="searchMemberForm" name="searchMemberName">
    {{csrf_field()}}
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">New Loan Application:</label>
            <input class="form-control" type="text" name="member_first_name" placeholder="Search Member Name To Create New Loan Application">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Search</button>
        </div>
    </form>
</div>

<div id="membersList"></div>
<div id="createMemberSavings"></div>
<div id="loansApplied">

    @if(count($loans))
<table class="table table-condensed table-striped table-hover table-bordered">
        <tr>
            <th>#</th>
            <th>Member Name</th>
            <th>Loan Type</th>
            <th>Loan Status</th>
            <th>Loan Amount</th>
            <th>Loan installments</th>
            <th>Interest Rate</th>
        </tr>
        @foreach($loans as $loan)
                <tr>
                    <td>{{ $loan->id}}</td>
                    <td>{{ $loan->member['member_first_name'] }} {{ $loan->member['member_last_name'] }}</td>
                    <td>{{ $loan->loanType->loan_type_name }}</td>
                    <td>{{ $loan->loanStatus->loan_status_name }}</td>
                    <td>{{ $loan->loan_amount }}</td>
                    <td>{{ $loan->loan_installments }} months</td>
                    <td>{{ $loan->interest_rate }} %</td>                 
                
                </tr>
                @endforeach
      
</table>
@endif
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
            tableData +="<td><a href = '#' class ='btn btn-info bt-sm' onclick = 'ViewMember("+responseObj[tData].id+")'>View Member</a></td>";

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

        var responseObj = JSON.parse(jsonResponse);
        var count=0,tData;
        var fields;
        var options;
        var bankType;
        //function to return length of responseObj object
        Object.size = function(responseObj){
            var size = 0, key;
            for(key in responseObj){
                if(responseObj.hasOwnProperty(key)) size++;
            }
            return size;
        };
        var size = Object.size(responseObj);
        // alert(size);
        var FormData ='<div class="container"><form action="/loansCreate" method="POST" name="applyLoan id="applyLoanId>@csrf';
        for(var tData=0; tData<size; tData++){
        var varTypes =['members','loantypes','loanstatus','banks'];
        // alert(varTypes[m]);
        // for(var v=varTypes[m]; m<size;m++){
        // alert(responseObj);
        
        for(tData in responseObj){
            //define input types for members, loantypes and banks variables
            // if(responseObj.members){
                // alert(responseObj[tData]==responseObj.loantypes);
                if(responseObj[tData]==responseObj.members){
                
                for(tData1 in responseObj[tData]){
                // alert(responseObj[tData][tData1].id);
            //Create the variables that change in each div so as to loop them in each input div dynamically
                fields = [{label:"", type:"hidden", name:"member_id", value:responseObj[tData][tData1].id},
                    {label:"Member", type:"text", name:"", value:responseObj[tData][tData1].member_first_name},
                    {label:"Loan Amount", type:"number", name:"loan_amount", value:""},
                     {label:"Loan Installments", type:"number", name:"loan_installments", value:""},
                     {label:"Grace Period", type:"number", name:"grace_period", value:""},
                     {label:"Application Date", type:"date", name:"application_date", value:""},
                     {label:"Interest Rate", type:"number", name:"interest_rate", value:""},
                     {label:"Bank Name", type:"text", name:"bank_name", value:responseObj[tData][tData1].bank_name},
                     {label:"", type:"hidden", name:"bank_code", value:responseObj[tData][tData1].bank_code}];
                }
                    for(var i =0; i<fields.length; i++){
                        FormData +='<div class = "form-group col-md-10"><br>';
                        // FormData +='<br/>';
                        FormData +='<label for="">'+fields[i].label+'</label>';
                        FormData +='<input type="'+fields[i].type+'" name="'+fields[i].name+'" value="'+fields[i].value+'" class="form-control">';
                        FormData +='</div>';
                    
                    }
            }
            else if(responseObj[tData]==responseObj.loantypes){
                // for(var j=0; j<options.length; j++){
                // alert(options[j].value);
                FormData +='<div class = "form-control col-md-10">';
                FormData +='<select name ="loan_type_id">';
                FormData +='<option value="0">Select Loan Type</option>';
                for(tData2 in responseObj[tData]){
            
            FormData +='<option value ="'+responseObj[tData][tData2].id+'">'+responseObj[tData][tData2].loan_type_name+'</option>';
                }
                FormData +='</select>';
                FormData +='</div>';
            
            // }
            }

            FormData +='<div class="container">';
    //    alert(options);
            }
            FormData +='<div class="form-group col-md-6">\
                        <button class="btn btn-primary sm" type="submit">Submit</button>\
                        </div>';
            FormData +='</div>';
            // }
        }
        // }
        // alert(responseObj[tData].member_first_name);
        
        FormData += "</form>";
        
        document.getElementById("createMemberSavings").innerHTML = FormData;
        
            }
            function submitLoanApplication(){
                var result = document.forms['applyLoan']['member_name'].value;
        alert(result);
            }
    document.getElementById('searchMemberForm').addEventListener('submit',showContent);
    // document.getElementById('applyLoanId').addEventListener('submit',submitLoanApplication);
</script>
@endsection