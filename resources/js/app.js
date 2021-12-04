
/* require('./bootstrap'); */

import Alpine from 'alpinejs';
import './chartjs';

window.Alpine = Alpine;

Alpine.start();

// CommonJS
window.Swal = require('sweetalert2')