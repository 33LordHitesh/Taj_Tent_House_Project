<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTH - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>
  .checkbox-wrapper-16 *,
  .checkbox-wrapper-16 *:after,
  .checkbox-wrapper-16 *:before {
    box-sizing: border-box;
    
  }

  .checkbox-wrapper-16 .checkbox-input {
    clip: rect(0 0 0 0);
    -webkit-clip-path: inset(100%);
            clip-path: inset(100%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
    width: 1px;
  }
  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile {
    border-color: #2260ff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    color: #2260ff;
  }
  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile:before {
    transform: scale(1);
    opacity: 1;
    background-color: #2260ff;
    border-color: #2260ff;
  }
  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-icon,
  .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-label {
    color: #2260ff;
  }
  .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile {
    border-color: #2260ff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
  }
  .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile:before {
    transform: scale(1);
    opacity: 1;
  }

  .checkbox-wrapper-16 .checkbox-tile {
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: auto;
    min-height: 8rem;
    border-radius: 1rem;
    border: 2px solid #b5bfd9;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    transition: 0.15s ease;
    cursor: pointer;
    position: relative;
  }
  .checkbox-wrapper-16 .checkbox-tile:before {
    content: "";
    position: absolute;
    display: block;
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid #b5bfd9;
    background-color: #fff;
    border-radius: 50%;
    top: 0.25rem;
    left: 0.25rem;
    opacity: 0;
    transform: scale(0);
    transition: 0.25s ease;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
    background-size: 12px;
    background-repeat: no-repeat;
    background-position: 50% 50%;
  }
  .checkbox-wrapper-16 .checkbox-tile:hover {
    border-color: #2260ff;
  }
  .checkbox-wrapper-16 .checkbox-tile:hover:before {
    transform: scale(1);
    opacity: 1;
  }

  .checkbox-wrapper-16 .checkbox-icon {
    transition: 0.375s ease;
    color: #494949;
  }
  .checkbox-wrapper-16 .checkbox-icon svg {
    width: 3rem;
    height: 3rem;
  }

  .checkbox-wrapper-16 .checkbox-label {
    color: #707070;
    transition: 0.375s ease;
    text-align: center;
  }
</style>
</head>


<x-navbar />

<div class="container mx-auto w-1/2 p-6">
    <h1 class="text-2xl font-bold mb-4 items-center text-center">Book Your Event</h1>

    <form action="{{ route('show.bill') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
    </div>

    <div>
        <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
        <input type="tel" id="mobile_number" name="mobile_number" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
    </div>

    <div class="mb-4">
        <label for="billing_address" class="block text-sm font-medium text-gray-700">Billing Address</label>
        <textarea id="billing_address" name="billing_address" rows="4" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
    </div>

    <div>
        <label for="event_type" class="block text-sm font-medium text-gray-700">Type of Event</label>
        <select id="event_type" name="event_type" class="border p-2 w-full" required>
        <option value="" disabled selected>--select--</option>  
        <option value="wedding">Wedding</option>
        <option value="religious">Religious Function</option>
        <option value="family">Family Function</option>
        <option value="other">Others</option>
        </select>
    </div>

    <div id="packages-container" class="hidden">
    <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 16px; text-align:center">Wedding Packages</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
              
            <div class="checkbox-wrapper-16">
              <label class="checkbox-wrapper">
                <input type="checkbox" class="checkbox-input" name="package" value="standard-no-catering" />
                <span class="checkbox-tile">
                  <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">Standard (No Catering)</h3>
                  <p>Description of Standard (No Catering)</p>
                </span>
              </label>
            </div>
            <div class="checkbox-wrapper-16">
              <label class="checkbox-wrapper">
                <input type="checkbox" class="checkbox-input" name="package" value="deluxe-no-catering" />
                <span class="checkbox-tile">
                  <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">Deluxe (No Catering)</h3>
                  <p>Description of Deluxe (No Catering)</p>
                </span>
              </label>
            </div>
            <div class="checkbox-wrapper-16">
              <label class="checkbox-wrapper">
                <input type="checkbox" class="checkbox-input" name="package" value="deluxe-catering" />
                <span class="checkbox-tile">
                  <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">Deluxe (With Catering)</h3>
                  <p>Description of Deluxe (With Catering)</p>
                </span>
              </label>
            </div>
            <div class="checkbox-wrapper-16">
              <label class="checkbox-wrapper">
                <input type="checkbox" class="checkbox-input" name="package" value="custom" />
                <span class="checkbox-tile">
                  <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 8px;">Customize your Package</h3>
                  <p>Description of Custome Package</p>
                </span>
              </label>
            </div>
            </div>
    </div>

    <div id="equipment-container" class="hidden">
    <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 16px; text-align: center">Select Equipment</h2>
    <table style="width: 100%; border-collapse: collapse;">
      <thead>
          <tr>
          <th style="border: 1px solid #ccc; padding: 8px;">Item Image</th>
          <th style="border: 1px solid #ccc; padding: 8px;">Item Name</th>
          <th style="border: 1px solid #ccc; padding: 8px;">Item Price</th>
          <th style="border: 1px solid #ccc; padding: 8px;">Quantity</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($materials as $material)
          <tr>
              <td style="border: 1px solid #ccc; padding: 8px;"><img src="{{ $material->image_url }}" alt="{{ $material->name }}" style="width: 50px;"></td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $material->name }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">₹{{ $material->price }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;"><input type="number" name="quantity[{{ $material->id }}]" min="0" style="width: 100%; padding: 5px;"></td>
          </tr>
          @endforeach
      </tbody>
    </table>
    </div>

    <div>
        <button type="submit" id="show-bill" class="bg-blue-600 text-white px-4 py-2 rounded" >Show Bill</button>
    </div>

    </form>

    <script>
    const eventTypeSelect = document.getElementById('event_type');
    const packagesContainer = document.getElementById('packages-container');
    const equipmentContainer = document.getElementById('equipment-container');
    const showBillButton = document.getElementById('show-bill');

    eventTypeSelect.addEventListener('change', function() {
      const selectedType = this.value;

      packagesContainer.classList.add('hidden');
      equipmentContainer.classList.add('hidden');
      showBillButton.disabled = true;

      if (selectedType === 'wedding') {
        packagesContainer.classList.remove('hidden');
      } else if (selectedType === 'religious' || selectedType === 'family' || selectedType === 'other') {
    // Show equipment selection section for other types of events
        equipmentContainer.classList.remove('hidden');
      }

      // Enable the "Show Bill" button if a package or equipment is selected
  if (isPackageOrEquipmentSelected()) {
    showBillButton.disabled = false;
  }
});

  // Check if any package or equipment is selected
function isPackageOrEquipmentSelected() {
  // Check if any package checkbox is checked
  const packageSelected = document.querySelectorAll('input[name="package[]"]:checked').length > 0;
  // Check if any quantity input is filled for equipment
  const equipmentSelected = document.querySelectorAll('input[name^="quantity"]:not([value="0"])').length > 0;
  
  return packageSelected || equipmentSelected;
}
  // *************************************************************************************************
  // *************************************************************************************************
    // Function to handle checkbox selection and change the style dynamically
    function selectPackageWithCheckbox(selectedPackage) {
        // Get all checkboxes in the package container
        const checkboxes = document.querySelectorAll('.checkbox-input');

        // Reset the background color of all checkboxes
        checkboxes.forEach(checkbox => {
            const parentTile = checkbox.closest('.checkbox-wrapper').querySelector('.checkbox-tile');
            parentTile.style.backgroundColor = checkbox.checked ? 'blue' : 'white'; // Highlight or reset
        });

        // Find the selected checkbox
        const selectedCheckbox = [...checkboxes].find(checkbox => checkbox.checked);
        if (selectedCheckbox) {
            const parentTile = selectedCheckbox.closest('.checkbox-wrapper').querySelector('.checkbox-tile');
            parentTile.style.backgroundColor = 'blue'; // Highlight selected checkbox
            console.log('Selected Package:', selectedPackage);
        } else {
            console.log('No package selected');
        }
    }

    // Attach event listeners to each checkbox
    document.addEventListener('DOMContentLoaded', () => {
        const checkboxes = document.querySelectorAll('.checkbox-input');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const packageName = this.closest('.checkbox-wrapper').querySelector('h3').innerText;
                selectPackageWithCheckbox(packageName.trim());
            });
        });
    });
    </script>
    
</div>