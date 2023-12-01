const VNGeoAPI = "https://provinces.open-api.vn/api";
const fetchProvinceURL = `${VNGeoAPI}/p`;
const provinceCount = 63;

function initOptionNode(name, value) {
  const selectNode = document.createElement("option");
  selectNode.value = value;
  selectNode.innerText = name;
  return selectNode;
}

const selectProvince = document.getElementById("user-info__select-province");


fetch(`${VNGeoAPI}/?depth=2`, {
  method: "GET",
  mode: "cors",
})
  .then((response) => response.json())
  .then((data) => {
    // console.log(data);
    for (const province of data) {
    //   console.log(province.code);
      selectProvince.appendChild(initOptionNode(province.name, province.code));
    }
  });

document
  .getElementById("user-info__select-province")
  .addEventListener("change", () => {
    let selectNode = document.getElementById("user-info__select-province");
    let selectDistrict = document.getElementById("user-info__select-district");
    let code = selectNode.options[selectNode.selectedIndex].value;
    console.log(`${fetchProvinceURL}/${code}?depth=2`);
    fetch(`${fetchProvinceURL}/${code}?depth=2`)
      .then((response) => response.json())
      .then((data) => {
        let districts = data.districts;
        // console.log(districts);
        selectDistrict.innerHTML = "";
        selectDistrict.appendChild(initOptionNode("Chọn quận/huyện", ""));
        for (const district of districts) {
          selectDistrict.appendChild(
            initOptionNode(district.name, district.code)
          );
        }
        selectDistrict.value = "";
      });
  });
