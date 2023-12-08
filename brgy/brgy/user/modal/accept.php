
<style>
#modalcontent{
    margin-top: 10%;
    background:white;
    width: 500px;

}
.modal-header{
    text-align: center;
}
.close{
    color: grey;
    float: right;
    font-size: 30px;
    font-weight: bold;
    background: none;
    border: none;
    margin-right: 20px;
}
.close:hover,.close:focus{
    color: red;
    text-decoration: none;
    cursor: pointer;
}
.modal-body .content input{
        border: none;
        border-bottom: 2px solid black;
        outline:none;  
}
.modal-body .content {
    padding: none;
    margin: none;
}
.modal-body .content select{
   border:none;
}
@keyframes modalopen {
    from{opacity: 0}
    to{opacity: 1}
    
}
       
        </style>
        <div class="modal fade" id="empModalaccept" role="dialog">
                <div class="modal-dialog" >
                    <div class="modal-content" id="modalcontent">
                      
                        <div class="modal-header">
        
                            <h4 class="modal-title">Accept</h4>
                       
                        </div>
                        <div class="modalaccept-body">
                        </div>
                        <div class="modal-footer">
                       

                        </div>
                    </div>
                </div>
        </div>