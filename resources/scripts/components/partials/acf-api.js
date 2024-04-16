const pricesContainers = [...document.querySelectorAll('.price')]; // get array of pricesBox;

    const URL = 'https://propanguru.pl/wp-json/wp/v2/pages/59';
    const getData = async (url) => {
        const data = await fetch(url);
        const result = await data.json();
        const pricesList = await result.acf.ceny_gazu;
        return pricesList;
    }
    const manage = async () => {
        const pricesList = await getData(URL);
        const allItemsLen = pricesList.length;
        const newPrice = pricesList[allItemsLen - 1]; //In future we could use .slice(), is better for performance and ClearCode;
        const oldPrice = pricesList[allItemsLen - 2] || [
            {
                dom: 0.0,
                biznes: 0.0
            }
        ];
        //callbacks meaning: np - new price for property, op - old price for property
        const diff = (np, op) => {
            return np - op
        }; //this return difference between price, its using for validate state in classlist managment,  u will see this in update()

        const biznesDiff = diff(newPrice.biznes, oldPrice.biznes);
        const domDiff = diff(newPrice.dom, oldPrice.dom);
        const update = (el, type, class_name, diff) => {
            const target = document.querySelector(class_name)
            target.textContent = newPrice[type] + 'zł';

            // diff > 0 ? el.classList.add('down') : el.classList.add('up');    Classlist
            // toggle based on price diff between two last records
            if (diff > 0) {
                el
                    .classList
                    .add('up');
            } else if (diff === 0) {
                el
                    .classList
                    .add('equal');
            } else {
                el
                    .classList
                    .add('down');
            }

        }
        update(pricesContainers[0], "dom", '.dom_price', domDiff) // div z cena wyswietla dla domu
        update(pricesContainers[1], "biznes", ".biznes_price", biznesDiff) // div z cena wyswietla dla biznsu
        
    }

    manage();