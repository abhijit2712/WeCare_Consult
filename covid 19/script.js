
    function searchbar() {
        var search_country=document.getElementById("searchbars").value;
        //console.log(search_country);
    
        CovidData(search_country);
    }


   // CovidData(document.querySelector("table"));
    async function CovidData(search_country) {
        const jsondata = await fetch("https://api.covid19api.com/summary");
        const covidinfo = await jsondata.json();
        console.log(covidinfo);
        const GloabalData = covidinfo.Countries;
        const Country = covidinfo;
        
        //console.log(GloabalData);
        //console.log(Country);
        show(GloabalData,search_country);
    }

    function show(data,search_country) {
        let table = document.getElementById('table');
        let obj2=data;
        for (let i = 0; i < data.length; i++) {
            let obj = data[i];
            const name = `${obj.Country}`;
            console.log(name);
           // console.log(search_country);

            if(name==search_country){
            let row = document.createElement('tr');
            let CountryName = document.createElement('td');
            let NewConfirmed = document.createElement('td');
            let NewDeaths = document.createElement('td');
            let NewRecovered = document.createElement('td');

            CountryName.innerHTML = `${obj.Country}`;
            NewConfirmed.innerHTML = `${obj.NewConfirmed}`;
            NewDeaths.innerHTML = `${obj.NewDeaths}`;
            NewRecovered.innerHTML = `${obj.NewRecovered}`;

            row.appendChild(CountryName);
            row.appendChild(NewConfirmed);
            row.appendChild(NewDeaths);
            row.appendChild(NewRecovered);

            table.appendChild(row);
            }

        }
    }
