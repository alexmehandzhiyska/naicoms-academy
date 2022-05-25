const url = 'https://random-data-api.com/api/crypto_coin/random_crypto_coin?size=50';

$.ajax({
    url: url, 
    success: result => {
        result.forEach(crypto => {
            const trEl = document.createElement('tr');

            const uidTdEl = document.createElement('td');
            uidTdEl.textContent = crypto.uid;
            
            const nameTdEl = document.createElement('td');
            nameTdEl.textContent = crypto.coin_name;
            
            const acronymTdEl = document.createElement('td');
            acronymTdEl.textContent = crypto.acronym;
            
            const logoTdEl = document.createElement('td');

            const logoImgEl = document.createElement('img');
            logoImgEl.setAttribute('src', crypto.logo);
            logoTdEl.append(logoImgEl);

            const deleteBtnEl = document.createElement('button');
            deleteBtnEl.classList.add('delete-btn');
            deleteBtnEl.textContent = 'Delete';

            trEl.append(uidTdEl, nameTdEl, acronymTdEl, logoTdEl, deleteBtnEl);
            $(".crypto-table-body")[0].append(trEl);

            
        })

        $(".delete-btn").each(function (i) {
            this.addEventListener('click', e => {
                const parentEl = e.target.parentElement;
                parentEl.remove();
            })
        });
    }
});

