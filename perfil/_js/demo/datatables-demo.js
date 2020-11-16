// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    language: {
      processing:     "Traitement en cours...",
      search:         "Pesquisar&nbsp;:",
      lengthMenu:    "Mostrar _MENU_ resultados por página",
      info:           "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      infoEmpty:      "Mostrando 0 até 0 de 0 registros",
      infoFiltered:   "(Filtrados de _MAX_ registros)",
      infoPostFix:    "",
      loadingRecords: "Pesquisando...",
      zeroRecords:    "Nenhum registro encontrado",
      emptyTable:     "Não temos nada para mostrar ainda",
      paginate: {
          first:      "Primeiro",
          previous:   "Anterior",
          next:       "Próximo",
          last:       "Último"
      },
      aria: {
          sortAscending:  ": Ordenar colunas de forma ascendente",
          sortDescending: ": Ordenar colunas de forma descendente"
      }
  }
  });

  

});
