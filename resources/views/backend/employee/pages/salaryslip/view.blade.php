@extends('backend.employee.layout.layout')
@section('section')
@php
$logodetails = getdetails();
@endphp
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
   <!--begin::Container-->
   <div class="container">
      <div class="card card-custom" style="padding: 25px 25px">
         <table cellpadding="0" cellspacing="0" style="padding:0px;margin:0px;border:0px;border-spacing:0px;font-family:Arial,Verdana,Geneva,sans-serif;letter-spacing:normal;text-indent:0px;text-transform:none;word-spacing:0px;text-decoration:none;width:100%">
            <tbody>
               <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px;pb-5">
                  <td width="50%" align="left" style="padding:4px;margin:0px">
                    <span>Name &amp; Address of Establishment</span>
                    <br>
                    <span style="font-weight:bold">Maxthon Technologies</span>
                    <br>
                    <span style="font-size:10px">226, SilverStone Arcade, Near D'Mart, Causeway Road, Katargam, Surat - 395004</span>
                </td>
                <td width="50%" align="right" style="padding:4px;margin:0px">Salary Slip For The Month of January - 2021</td>
               </tr>


               <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                  <td style="padding:4px;margin:0px;vertical-align:top;border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0);border-top-width:2px;border-top-style:solid;border-top-color:rgb(0,0,0);border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:rgb(0,0,0)">
                     <table style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                        <tbody>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">Emp. No:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">3</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">Emp. Name:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">Nachiket Rameshbhai Dobariya</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">Designation:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">Sr. Software Engineer</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">Department:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">Mobile Application</td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
                  <td style="padding:4px;margin:0px;border-top-width:2px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:rgb(0,0,0)">
                     <table style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                        <tbody>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">P.F. No:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px"></td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">ESI No:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px"></td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">Bank:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">State Bank Of India</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">A/C No:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">33566321006</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px">D.O.J:<span>&nbsp;</span></td>
                              <td style="padding:4px;margin:0px">1 April, 2019</td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>


               <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                  <td colspan="2" style="padding:0px;margin:0px;width:100%">
                     <table style="padding:0px;margin:0px;border:0px;border-spacing:0px;width:100%">
                        <tbody>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <th colspan="2" style="border-width:1px 1px 1px 2px;border-style:solid;border-color:rgb(0,0,0)">WORKING DETAILS</th>
                              <th colspan="3" style="border:1px solid rgb(0,0,0)">EARNING DETAILS</th>
                              <th colspan="2" style="border-width:1px 2px 1px 1px;border-style:solid;border-color:rgb(0,0,0)">DEDUCTION DETAILS</th>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px;width:100%">
                              <th colspan="2" style="border-width:1px 1px 1px 2px;border-style:solid;border-color:rgb(0,0,0)"></th>
                              <th style="border:1px solid rgb(0,0,0)">Earnings</th>
                              <th style="border:1px solid rgb(0,0,0)">Actual</th>
                              <th style="border:1px solid rgb(0,0,0)">Payable</th>
                              <th style="border:1px solid rgb(0,0,0)">Deduction</th>
                              <th style="border-width:1px 2px 1px 1px;border-style:solid;border-color:rgb(0,0,0)">Amount</th>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0)">WD</td>
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">23</td>
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">BASIC</td>
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">30000</td>
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">30000</td>
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">P.F.</td>
                              <td style="padding:4px;margin:0px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(0,0,0);border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0)">WO</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">5</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">HRA</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right"></td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">ESI</td>
                              <td style="padding:4px;margin:0px;border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0)">PH</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">3</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">LEAVE ENCASH</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right"></td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">P.T.</td>
                              <td style="padding:4px;margin:0px;border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0)">PD</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">PRODUC</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right"></td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">TDS</td>
                              <td style="padding:4px;margin:0px;border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0)">LWP</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">CONVEI</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right"></td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">OTHER DED.</td>
                              <td style="padding:4px;margin:0px;border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">00</td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:2px;border-left-style:solid;border-left-color:rgb(0,0,0)">Total</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">31</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)">TRANSPORT</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right"></td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right">0</td>
                              <td style="padding:4px;margin:0px;border-right-width:1px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0)"></td>
                              <td style="padding:4px;margin:0px;border-right-width:2px;border-right-style:solid;border-right-color:rgb(0,0,0);border-left-width:1px;border-left-style:solid;border-left-color:rgb(0,0,0);text-align:right"></td>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <th style="border-width:1px 1px 1px 2px;border-style:solid;border-color:rgb(0,0,0);text-align:left"></th>
                              <th style="border:1px solid rgb(0,0,0);text-align:right"></th>
                              <th style="border:1px solid rgb(0,0,0);text-align:left">Gross Income</th>
                              <th style="border:1px solid rgb(0,0,0);text-align:right"></th>
                              <th style="border:1px solid rgb(0,0,0);text-align:right">30000</th>
                              <th style="border:1px solid rgb(0,0,0);text-align:left">Gross Ded.</th>
                              <th style="border-width:1px 2px 1px 1px;border-style:solid;border-color:rgb(0,0,0);text-align:right">0</th>
                           </tr>
                           <tr style="padding:0px;margin:0px;border:0px;border-spacing:0px">
                              <th colspan="5" style="border-width:1px 1px 1px 2px;border-style:solid;border-color:rgb(0,0,0);text-align:left"><strong>Rupees<span>&nbsp;</span></strong><span style="font-style:italic">Thirty Thousand Only</span></th>
                              <th style="border:1px solid rgb(0,0,0);text-align:left">Net Amount</th>
                              <th style="border-width:1px 2px 1px 1px;border-style:solid;border-color:rgb(0,0,0);text-align:right">30000</th>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
   <!--end::Container-->
</div>
<!--end::Entry-->
@endsection
