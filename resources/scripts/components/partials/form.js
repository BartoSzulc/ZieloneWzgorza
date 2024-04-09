import SlimSelect from 'slim-select';
export function initForm() {

    const selectElement = document.getElementById('selectCustom');

    if(selectElement && selectElement.options.length > 0) {
        selectElement.options[0].setAttribute('data-placeholder', 'true');
    }
    
    new SlimSelect({

        select: '#selectCustom',
        settings: {
          showSearch: false,
          placeholderText: 'Co Cię interesuje?',
          allowDeselect: true
        }
    })

}