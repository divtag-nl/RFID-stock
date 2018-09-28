import HomePage from './pages/HomePage';
import ScanStock from './pages/StockScan';
import CheckIn from './pages/CheckIn';
import Location from './pages/Location';

export default [
  {path: '', component: HomePage},
  {path: '/scan-stock', component: ScanStock, name: 'scan-stock'},
  {path: '/check-in', component: CheckIn, name: 'check-in'},
  {path: '/location', component: Location, name: 'location'},
];
