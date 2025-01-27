class Singleton:
    _instance = None

    @classmethod
    def getInstance(cls):
        if cls._instance is None:
            cls._instance = cls()
        return cls._instance


singleton_object = None
class Singleton:
    pass

def get_singleton_object():
    global singleton_object
    if singleton_object is None:
        singleton_object = Singleton()
    return singleton_object

