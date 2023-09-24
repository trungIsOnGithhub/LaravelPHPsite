namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ThoughtController extends Controller
{
    /**
     * Viewer create new though on my images
     *
     * @return void
     */
    public function postOneThought()
    {
        request('thought');
        request('name');

        $newThough = new Thought(
            request('thought'),
            request('name')
        );

        $newThough->save();

        return;
    }
}