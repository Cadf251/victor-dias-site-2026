export function initFormMasks() {
  $(document).ready(function() {
    $('input[data-validation]').each(function() {
      const tipo = $(this).data('validation');
      switch(tipo) {
        case 'cpf': $(this).mask('000.000.000-00'); break;
        case 'cep': $(this).mask('00000-000'); break;
        case 'phone': $(this).mask('(00)00000-0000'); break;
        case 'cnpj': $(this).mask('00.000.000/0000-00'); break;
        case 'placa':
          $(this).mask('AAA-0X00', {
            translation: {
              'A': { pattern: /[A-Za-z]/ },
              '0': { pattern: /\d/ },
              'X': { pattern: /[A-Za-z0-9]/ }
            }
          });
          break;
      }
    });
  });
}