// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').dataTable();
  $('#dataTable2').dataTable( {
    lengthMenu:[3,6,9,12],
    order: [[3, 'desc']],
    columnDefs: [
      { width: '5%', targets: [0,3] },
      { width: '7%', targets: [2] },
      { orderable: false, targets: [4] }
    ]
  } );
  $('#dataTable3').dataTable( {
    columnDefs: [
      { width: "5%", target: 0 },
      { orderable: false, targets: [4] }
    ]
  } );
});
