

import AirDatepicker from 'air-datepicker';
const localePL = {
  days: ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'],
  daysShort: ['Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob'],
  daysMin: ['Nd', 'Pn', 'Wt', 'Śr', 'Czw', 'Pt', 'So'],
  months: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'],
  monthsShort: ['Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru'],
  today: 'Dzisiaj',
  clear: 'Wyczyść',
  dateFormat: 'dd.MM.yyyy',
  timeFormat: 'hh:mm:aa',
  firstDay: 1
};


export function initDatePicker() {
  let dp2 = new AirDatepicker('#dateMax', {
    isMobile: true,
    autoClose: true,
    locale: localePL,
  });
    let dp1 = new AirDatepicker('#dateMin', {

      minDate: new Date().setHours(0, 0, 0, 0),
      isMobile: true,
      autoClose: true,
      onSelect({date}) {
        const nextDay = new Date(date);
        nextDay.setDate(nextDay.getDate() + 1);

        dp2.update({
            minDate: nextDay
        });
        dp2.clear();
      },
      locale: localePL,
  });


}