import HomePage from './pages/HomePage';
import ScanStock from './pages/StockScan';

export default [
    { path: '', component: HomePage },
    { path: '/scan-stock', component: ScanStock, name: 'scan-stock' },
];
