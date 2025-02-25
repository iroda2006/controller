 1. ProductController yaratish
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Barcha mahsulotlarni ko'rsatish
    public function index()
    {
        return "Barcha mahsulotlar";
    }


// Yangi mahsulot qo'shish sahifasi
    public function create()
    {
        return "Yangi mahsulot qo'shish";
    }


    // Berilgan ID bo'yicha mahsulotni ko'rsatish
    public function show($id)
    {
        return "Mahsulot ID: {$id}";
    }

    // Berilgan ID bo'yicha mahsulotni tahrirlash sahifasi
    public function edit($id)
    {
        return "Mahsulotni tahrirlash, ID: {$id}";
    }

    // Berilgan ID bo'yicha mahsulotni o'chirish
    public function destroy($id)
    {
        return "Mahsulot o'chirildi, ID: {$id}";
    }
    // Mahsulot qidirish
    public function search()
    {
        return "Qidiruv natijalari";
    }









}
