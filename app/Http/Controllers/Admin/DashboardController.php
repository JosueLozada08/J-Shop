namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSales = Order::sum('total'); // Total de ventas
        $totalUsers = User::count(); // Total de usuarios
        $totalOrders = Order::count(); // Total de pedidos
        $mostSoldProduct = Product::withCount('orders')->orderBy('orders_count', 'desc')->first(); // Producto más vendido

        return view('admin.dashboard', compact('totalSales', 'totalUsers', 'totalOrders', 'mostSoldProduct'));
    }
}
