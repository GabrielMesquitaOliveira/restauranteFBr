<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido; // Certifique-se de que o modelo Pedido está criado
use App\Models\Cliente; // Para selecionar clientes
use App\Models\Garcom; // Para selecionar garçons

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all(); // Obtém todos os pedidos
        return view('dashboard', compact('pedidos')); // Passa os pedidos para a view
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete(); // Exclui o pedido
        return redirect()->back()->with('success', 'Pedido concluído com sucesso!'); // Redireciona com mensagem
    }

    public function create()
    {
        $clientes = Cliente::all(); // Obtenha todos os clientes
        $garcons = Garcom::all(); // Obtenha todos os garçons
        return view('pedidos.create', compact('clientes', 'garcons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dt_pedido' => 'required|date',
            'valor_total' => 'required|numeric',
            'status_pdd' => 'required|string|max:50',
            'id_cliente' => 'required|exists:tb_cliente,id',
            'id_garcom' => 'required|exists:tb_garcom,id',
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.create')->with('success', 'Pedido cadastrado com sucesso!');
    }
}
